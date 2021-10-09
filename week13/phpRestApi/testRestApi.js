const axios = require('axios')

const getStudent = async (id = 1) => {
  try {
    // const res = await fetch(`http://localhost/week13/phpRestApi/?id=${id}`, {
    const res = await axios.get(`http://localhost/week13/phpRestApi/?id=${id}`)
    console.log(`ID: ${id}`, res.data);
  } catch (err) {
    console.log(err)
  }
}

const updateStudent = async (id = 1, fname = undefined, lname = undefined, email = undefined) => {
  try {
    const res = await axios.post('http://localhost/week13/phpRestApi/', {
      id,
      firstName: fname,
      lastName: lname,
      email
    })
    console.log(`ID: ${id}`, res.data);
  } catch (err) {
    console.log(err)
  }
}

const main = async () => {
  await getStudent()
  await updateStudent(id = 1, fname = 'KRUTIK')
  await getStudent()
  await getStudent(3)
  await updateStudent(id = 3, fname = 'PragnenKumar')
  await getStudent(3)
}
main()