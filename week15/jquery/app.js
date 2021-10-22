$(document).ready(() => {
  $("#modal").show()
  $("#backdrop").click(() => {
    $("#backdrop").hide()
    $("#modal").hide('fast')
  })
  $("#btn-close").click(() => {
    $("#backdrop").hide()
    $("#modal").hide('fast')
  })

  // sliding effect
  $("#slide").click(() => {
    $("#toggle-slide").slideToggle('slow')
  })

  // fading effect
  $("#fade").click(() => {
    $("#toggle-fade").fadeToggle('slow')
  })

  // CSS manipulation
  $("#css-mani").on('mouseover', () => {
    $("#css-mani-target").css("border-radius", "50%")
  }).on('mouseleave', () => {
    $("#css-mani-target").css("border-radius", "0%")
  })

  // DOM manipulation
  $("#toglClass").click(() => {
    $("#toglClassTarget").toggleClass("active")
  })
  $("#input").keyup(function () {
    let val = $(this).val()
    $("#inputVal").text(val)
  })
})