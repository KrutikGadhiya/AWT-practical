const Name = document.getElementById('Name')
const Email = document.getElementById('Email')
const pass = document.getElementById('pass')
const Mobile = document.getElementById('Mobile')
const emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

function submitForm() {
  const depart = document.getElementById('Depart').value

  if (isNaN(Mobile.value) && Mobile.length === 10) {
    alert("Enter Valid Mo.number")
    return false
  }
  if (!isNaN(Name.value)) {
    alert("Only letters allowed in First Name")
    return false
  }

  if (pass.value.length < 6 || pass.value.length > 12) {
    alert("Password must be between 6 and 12.")
    return false
  }
  if (!emailRegex.test(Email.value)) {
    alert("Enter Correct Email")
    return false
  }
  if (depart === 'Department') {
    alert('Please Select subject')
    return false
  }

  if (document.querySelector('input[name="Gender"]:checked') === null) {
    alert('Plese Select the Gender')
    return false
  }

  return true
}