//var _icm = iCM == 0 ? 0 : iCM;



var prev_date = new Date(iCY, iCM-2, 1);
var next_date = new Date(iCY, iCM, 1);

var sCP = prev_date.getFullYear() + '-' + prev_date.getMonth();
var sCN = next_date.getFullYear() + '-' + next_date.getMonth();




function getFirstDay(Y, M, D) {
    var y, m, d;
    y = parseInt(Y);
    m = parseInt(M);
    d = parseInt(D);
    var fy, fa, fm;
    if (y == 0) {
        return false;
    }
    if (y == 1582 && m == 10 && d > 4 && d < 15) {
        return false;
    }
    if (y < 0) {
        y++;
    }
    if (m > 2) {
        fy = y;
        fm = m + 1;
    } else {
        fy = y - 1;
        fm = m + 13;
    }
    var returnValue = Math.floor(Math.floor(365.25 * fy) + Math.floor(30.6001 * fm) + d + 1720995);
    var gregorianStart = 15 + 31 * (18994);
    if (d + 31 * (m + 12 * y) >= gregorianStart) {
        fa = Math.floor(0.01 * fy);
        returnValue += 2 - fa + Math.floor(0.25 * fa);
    }
    return returnValue + 1;
}


function checkInArray(aDay, iDay, aSort) {
    for (var i in aDay) {
        if (aDay[i] == iDay) {
            if (aSort == false) {
                return true;
            }
            for (var j in aSort) {
                if (aSort[j] == iDay) {
                    return true;
                }
            }
        }
    }
}


function getMonthURL(iM) {
    var aM = iM.split("-");
    if (aM.length == 2) {
		return "/logs/" + aM[0] + "/" + (parseInt(aM[1])+1) + "/";
    } else {
        return "";
    }
}


function gCalendar(iCY, iCM, iCD, iCS, sCP, sCN) {
    /*
	if (!iCY) {
        iCY = iDCY;
    }
    if (!iCM) {
        iCM = iDCM;
    }
    if (iCD==='') {
        iCD = iDCD;
    }
    if (!sCP) {
        sCP = sDCP;
    }
    if (!sCN) {
        sCN = sDCN;
    }
	*/
    var HasLog = new Array();
    if (LDWD["y" + iCY]) {
        if (LDWD["y" + iCY]["m" + iCM]) {
            HasLog = LDWD["y" + iCY]["m" + iCM].split(",");
        }
    }
	var HasSort = false;
	/*
    var HasSort = new Array();
    if (LDWDS["s" + iCS]) {
        HasSort = LDWDS["s" + iCS].split(",");
    } else {
        HasSort = false;
    }
	*/
    //var Day = new Array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
	var Day = new Array("日", "一", "二", "三", "四", "五", "六");
    var daysInMonth = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    var daysInAWeek = 7;
    var OStr;
    var today = new Date();
    if (iCY == "" || isNaN(iCY)) {
        thisYear = today.getFullYear();
    } else {
        thisYear = parseInt(iCY);
    }
    if (iCM == "" || isNaN(iCM)) {
        thisMonth = today.getMonth() + 1;
    } else {
        thisMonth = parseInt(iCM);
        if (thisMonth < 1) {
            thisMonth = 1;
        }
        if (thisMonth > 12) {
            thisMonth = 12;
        }
    }
    if (iCD == "" || isNaN(iCD)) {
        //thisDay = today.getDate();
		thisDay = 0;
    } else {
        thisDay = parseInt(iCD);
        if (thisDay < 0) {
            thisDay = 1;
        }
        if (thisDay > 31) {
            thisDay = 31;
        }
    }
    if ((thisYear % 4) == 0) {
        daysInMonth[1] = 29;
        if ((thisYear % 100) == 0 && (thisYear % 400) != 0) {
            daysInMonth[1] = 28;
        }
    }
    OStr = "<table cellspacing='0'>\n<tr class='calendarHead'><td colspan='7'>";
    if (getMonthURL(sCP) == "") {
		OStr += "<span class='preMonth'>&laquo;";
    } else {
		OStr += "<span class='preMonth'><a href='" + getMonthURL(sCP) + "'>&laquo;</a></span>";
    }
    OStr += "&nbsp;" + thisYear + "\u5E74&nbsp;" + thisMonth + "\u6708&nbsp;";
    if (getMonthURL(sCN) == "") {
		OStr += "<span class='nextMonth'>&raquo;</span>";
    } else {
		OStr += "<span class='nextMonth'><a href='" + getMonthURL(sCN) + "'>&raquo;</a></span>";
    }
    OStr += "</td></tr>\n<tr class='week'>";
    for (i = 0; i < daysInAWeek; i++) {
        OStr += "<td class='d" + i + "'>" + Day[i] + "</td>";
    }
    OStr += "</tr>\n<tr class='day'>";
    var firstDay = (getFirstDay(thisYear, thisMonth, 1)) % 7;
    for (i = 0; i < firstDay; i++) {
        OStr += "<td>&nbsp;</td>";
    }
    for (d = 1; i < daysInAWeek; i++, d++) {
        if (d == 5 && thisMonth == 10 && thisYear == 1582) {
            d += 10;
        }
        OStr += "<td";
        if (d == thisDay) {
            OStr += " class=today";
        } else {
            OStr += "";
        }
        if (checkInArray(HasLog, d, HasSort)) {
            OStr += "><a href='/logs/" + thisYear + "/";
			if (thisMonth < 10) {
                OStr += "0";
            }
			OStr += thisMonth + "/d";
            if (d < 10) {
                OStr += "0";
            }
            OStr += d + ".html'><b>" + d + "</b></a></td>";
        } else {
            OStr += ">" + d + "</td>";
        }
    }
    var lastDayOfMonth = daysInMonth[thisMonth - 1];
    for (j = 1; j < 6 && d <= lastDayOfMonth; j++) {
        OStr += "</tr>\n<tr class='day'>";
        for (i = 0; i < daysInAWeek && d <= lastDayOfMonth; i++, d++) {
            OStr += "<td";
            if (d == thisDay) {
                OStr += " class=today";
            } else {
                OStr += "";
            }
            if (checkInArray(HasLog, d, HasSort)) {
                OStr += "><a href='/logs/" + thisYear + "/";
                if (thisMonth < 10) {
                    OStr += "0";
                }
                OStr += thisMonth + "/d";
	                if (d < 10) {
                    OStr += "0";
                }
                OStr += d + ".html'><b>" + d + "</b></a></td>";
            } else {
                OStr += ">" + d + "</td>";
            }
        }
        for (; i < daysInAWeek; i++) {
            OStr += "<td>&nbsp;</td>";
        }
    }
    OStr += "</tr></table>";
    document.write(OStr);
}

gCalendar(iCY, iCM, iCD, iCS, sCP, sCN);
