// Script For ontype phone Validation Start
function Validatephone(phone) {
  
    if (/^[7-9][0-9]{9}$/.test(phone)) {
        $("span#phonewarning").css("display", "none");
        $(".sotpbtn").attr("disabled", false);
    } else {
        $("span#phonewarning").css("display", "block");
        $(".sotpbtn").attr("disabled", true);
    }
}
// Script For ontype phone Validation End
// Script For Gticket form display
  	$("#selecthelpdesk").change(function () {
		var val= $('#selecthelpdesk').val();
        if(val=='' || val==null){
        	 $(".mainTicketFrm ").css("display", "none");
        }
        else
        {
        	 $(".mainTicketFrm ").css("display", "block");
        }   
	});
// Script For Gticket form display End
// Script For ontype Name Validation Start
function Validatename(p) {
    name = p.value;
    var expr = /^[ a-z- 0-9 - A-Z ]{1,50}$/;
    if (!expr.test(name)) {
        $("#namewarning").css("display", "block");
        $(".ticketbtn").attr("disabled", true);
    } else {
        $("#namewarning").css("display", "none");
        $(".ticketbtn").attr("disabled", false);
    }
}
// Script For ontype Name Validation End
// Script For ontype Email Validation Start
function Validateemail(email) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        $("#emailwarning").css("display", "none");
        $(".ticketbtn").attr("disabled", false);
    } else {
        $("#emailwarning").css("display", "block");
        $(".ticketbtn").attr("disabled", true);
    }
}
// Script For ontype Email Validation End
// Script For ontype ValidateSubject  Start
function ValidateSubject(s) {
    sname = s.value;
    var expr = /^[a-zA-Z ]{1,20}$/;
    if (!expr.test(sname)) {
        $("#subjectwarning").css("display", "block");
        $(".ticketbtn").attr("disabled", true);
    } else {
        $("#subjectwarning").css("display", "none");
        $(".ticketbtn").attr("disabled", false);
    }
}
// Script For ontype ValidateSubject End
// Script For ontype Validateissue  Start
function Validateissue(issue) {
    if (issue == "" || issue == undefined) {
        $("#issuewarning").css("display", "block");
        $(".ticketbtn").attr("disabled", true);
    } else {
        $("#issuewarning").css("display", "none");
        $(".ticketbtn").attr("disabled", false);
    }
}
// Script For ontype Validateissue End
// Script For ontype Validatephone  Start
function Validatemobile(phone) {
    if (/^[7-9][0-9]{9}$/.test(phone)) {
        $("#mobilewarning").css("display", "none");
        $(".ticketbtn").attr("disabled", false);
    } else {
        $("#mobilewarning").css("display", "block");
        $(".ticketbtn").attr("disabled", true);
    }
}
// Script For ontype Validatephone End
// Script For ontype Validatecity  Start
function Validatecity(city) {
    if (/^[a-zA-Z ]{2,30}$/.test(city)) {
        $("#citywarning").css("display", "none");
        $(".ticketbtn").attr("disabled", false);
    } else {
        $("#citywarning").css("display", "block");
        $(".ticketbtn").attr("disabled", true);
    }
}
// Script For ontype Validatecity End
// Script For ontype Validatezip  Start
function Validatezip(zip) {
    if (/^[1-9]{1}[0-9]{4,}$/.test(zip)) {
        $("#zipwarning").css("display", "none");
        $(".ticketbtn").attr("disabled", false);
    } else {
        $("#zipwarning").css("display", "block");
        $(".ticketbtn").attr("disabled", true);
    }
}
// Script For ontype Validatezip End 
// Script For ontype Validatelandmark  Start
function Validatelandmark(city) {
    if (/^[a-zA-Z 0-9.,()=]{2,100}$/.test(city)) {
        $("#landmarkwarning").css("display", "none"); 
        $(".ticketbtn").attr("disabled", false);
    } else {
        $("#landmarkwarning").css("display", "block");
        $(".ticketbtn").attr("disabled", true);
    }
}
// Script For ontype Validatelandmark End
// Script For ontype Validateaddress Start
function Validateaddress(address) {

      var expr = /^[a-zA-Z 0-9,.-()-+/]{1,1000}$/;
    if (expr.test(address)) {
        $("#addresswarning").css("display", "none"); 
        $(".ticketbtn").attr("disabled", false);
    } else {
        $("#addresswarning").css("display", "block");
        $(".ticketbtn").attr("disabled", true);
    }
}
// Script For ontype Validateaddress End



function checkTicketForm() {

    // Script For onsubmit fullname Validation Start
        var name = $("#fullname").val();
        var expr = /^[ a-z- 0-9 - A-Z ]{1,50}$/;
        if (!expr.test(name) || (name == "" && name == undefined)) {
            this.fullname.focus();
            $("#namewarning").css("display", "block");
            return false;
        }
    // Script For onsubmit fullname Validation End
    // Script For onsubmit ValidateSubject  Start
        var sub = $("#subject").val();
        var exprs = /^[a-zA-Z ]{1,20}$/;
        if (!exprs.test(sub) || (sub == "" && sub == undefined)) {
            this.subject.focus();
            $("#subjectwarning").css("display", "block");
            return false;
        }
    // Script For onsubmit ValidateSubject End
    // Script For onsubmit Validateissue  Start
        var issuetext = $("textarea#issue").val();
        if (issuetext == "" || issuetext == undefined) {
            this.issue.focus();
            $("#issuewarning").css("display", "block");
            return false;
        }
    // Script For onsubmit Validateissue End 
    // Script For onsubmit Validatephone  Start
        var mobile = $("#phone").val();
        if (!/^[7-9][0-9]{9}$/.test(mobile) || (mobile == "" && mobile == undefined)) {
            this.phone.focus();
            $("#mobilewarning").css("display", "block");
            return false;
        }
    // Script For onsubmit Validatephone End
      // Script For onsubmit Validatecity  Start
        var citytext = $("#city").val();
        if (!/^[a-zA-Z ]{2,30}$/.test(citytext) || (citytext == "" && citytext == undefined)) {
            this.city.focus();
            $("#citywarning").css("display", "block");
            return false;
        }
    // Script For onsubmit Validatecity End
    // Script For onsubmit Validatepincode  Start
        var zipval = $("#pincode").val();
        if (!/^[1-9]{1}[0-9]{4,}$/.test(zipval) || (zipval == "" && zipval == undefined)) {
            this.pincode.focus();
            $("#zipwarning").css("display", "block");
            return false;
        }
    // Script For onsubmit Validatepincode End
     // Script For onsubmit Validatelandmark  Start
        var landmarkval = $("#landmark").val();
        if (!/^[a-zA-Z 0-9.,()=]{2,100}$/.test(landmarkval) || (landmarkval == "" && landmarkval == undefined)) {
            this.landmark.focus();
            $("#landmarkwarning").css("display", "block");
            return false;
        }
    // Script For onsubmit Validatelandmark End
    // Script For onsubmit Validateaddress  Start
        var addressval = $("#address").val();
        if (!/^[a-zA-Z 0-9,.-()-+/]{1,1000}$/.test(addressval) || (addressval == "" && addressval == undefined)) {
            this.address.focus();
            $("#addresswarning").css("display", "block");
            return false;
        }
    // Script For onsubmit Validateaddress End

        
}


