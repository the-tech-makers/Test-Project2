setTimeout(() => {
  document.getElementsByClassName("error_msg").innerHTML = "";
}, 5000);

function validateForm() {
  var projectName = document.getElementById("projectName").value;
  var projectDesc = document.getElementById("projectDesc").value;
  var status = document.getElementById("status").value;
  var clientCompany = document.getElementById("clientCompany").value;
  var projectLeader = document.getElementById("projectLeader").value;
  var estimatedBudget = document.getElementById("estimatedBudget").value;
  var totalAmount = document.getElementById("totalAmount").value;
  var estimatedDuration = document.getElementById("estimatedDuration").value;

  if (projectName == "") {
    document.getElementById("project-name-error").innerHTML =
      "Project name is required.";
    return false;
  } else {
    if (!projectName.match(/^[A-z]+$/)) {
      document.getElementById("project-name-error").innerHTML =
        "Project name is invalid.";
      return false;
    }
    // document.getElementById("project-name-error").innerHTML = "valid";
    // return true;
  }

  if (projectDesc == "") {
    document.getElementById("desc-error").innerHTML =
      " Description is required.";
    return false;
  }

  if (status == "") {
    document.getElementById("status-error").innerHTML = "Status is required.";
    return false;
  }

  if (clientCompany == "") {
    document.getElementById("client-company-error").innerHTML =
      "ClientCompany name is required.";
    return false;
  } else {
    if (!clientCompany.match(/^[A-z]+$/)) {
      document.getElementById("client-company-error").innerHTML =
        "ClientCompany name is invalid.";
      return false;
    }
  }

  if (projectLeader == "") {
    document.getElementById("project-leader-error").innerHTML =
      "projectLeader name is required.";
    return false;
  } else {
    if (!projectLeader.match(/^[A-z]*\s{1}[A-z]+$/)) {
      document.getElementById("project-leader-error").innerHTML =
        "projectLeader name is invalid.";
      return false;
    }
  }

  if (estimatedBudget == "") {
    document.getElementById("estimated-budget-error").innerHTML =
      "Estimated Budget is required.";
    return false;
  } else {
    if (!estimatedBudget.match(/^\d+/)) {
      document.getElementById("estimated-budget-error").innerHTML =
        "Estimated Budget is invalid.";
      return false;
    }
  }

  if (totalAmount == "") {
    document.getElementById("total-amount-error").innerHTML =
      "Total Amount is required.";
    return false;
  } else {
    if (!totalAmount.match(/^\d+/)) {
      document.getElementById("total-amount-error").innerHTML =
        "Total Amount is invalid.";
      return false;
    }
  }

  if (estimatedDuration == "") {
    document.getElementById("project-duration-error").innerHTML =
      "Estimated Duration is required.";
    return false;
  } else {
    if (!estimatedDuration.match(/^\d+/)) {
      document.getElementById("project-duration-error").innerHTML =
        "Estimated Duration is invalid.";
      return false;
    }
  }

  document.getElementById("project-name-error").innerHTML = "valid";
  document.getElementById("desc-error").innerHTML = " valid";
  document.getElementById("status-error").innerHTML = "valid";
  document.getElementById("client-company-error").innerHTML = "valid";
  document.getElementById("project-leader-error").innerHTML = "valid";
  document.getElementById("estimated-budget-error").innerHTML = "valid";
  document.getElementById("total-amount-error").innerHTML = "valid";
  document.getElementById("project-duration-error").innerHTML = "valid";
  return true;

  // return true;
}
