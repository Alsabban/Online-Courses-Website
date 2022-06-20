let ID_COUNTER = 1;

// signup form
 let signupBtn = document.getElementById('signupBtn');
 let fullNameTextBox = document.getElementById('fullName');
 let phoneTextBox = document.getElementById('phoneNumber');
 let emailTextBox = document.getElementById('email');
 let passwordTextBox = document.getElementById('password');

 // student-details
 let fullNameParagraph = document.getElementById('fullNameP');
 let phoneParagraph = document.getElementById('phoneP');
 let emailParagraph = document.getElementById('emailP');
 let passwordParagraph = document.getElementById('passwordP');

class Student{
    constructor(name, phone, email, password){
        this.name = name;
        this.phone = phone;
        this.email = email;
        this.id= ID_COUNTER;
        this.password= password;
        ID_COUNTER++;
    }
}

class Students {
    constructor(){
      this.students = []
    }
    newStudent(name, phone, email, password){
      let s = new Student(name, phone, email, password);
      this.students.push(s);
    }
    get allStudents(){
        return this.students;
      }
}

let students = new Students();

signupBtn.addEventListener('click', function(){
     let fullName = fullNameTextBox.value;
     let phoneNumber = phoneTextBox.value;
     let email = emailTextBox.value;
     let password = passwordTextBox.value;

     students.newStudent(fullName,phoneNumber,email,password);
     console.log(students.allStudents);
 });