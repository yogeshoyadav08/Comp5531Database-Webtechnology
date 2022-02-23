// LOGGING OUTPUT
/*
alert('Hello World'); // Do not use for debugging. Stops script and only strings
console.log('Hello World'); // always helps to debug the issues
console.error('This is an error');
console.warn('This is a warning');
*/

/*
// VARIABLES -  let, const

let age = 30;
console.log(age);
// let can be re-assigned
age = 31;
console.log(age);

const x = 30;
console.log(x);
// Const cannot be re-assigned
// age = 31;
// console.log(age)

const Fname='Hello World';
console.log(Fname);

*/

/*
// DATA TYPES - String, Number, Boolean, null, undefined
const name = 'Brad';
const age = 37;
const rating = 3.5;
const isCool = true;
const x = null; 
//In JavaScript, typeof null is 'object', which incorrectly suggests that null is an object. 
//This is a bug and one that unfortunately can't be fixed, because it would break existing code

const y = undefined;
let z; // undefined

// Check type
console.log(typeof z);
*/

/*
// STRINGS

// Concatenation
const Firstname = 'Brad';
const ageOfPerson = 37;
console.log('My name is ' + Firstname + ' and I am ' + ageOfPerson);
// Template literal (better)
console.log(`My name is ${Firstname} and I am ${ageOfPerson}`);

// String methods & properties
const s = 'Hello World';
let val;
// Get length
val = s.length;
console.log(val);

// Change case
val = s.toUpperCase();
console.log(val);
val = s.toLowerCase();
console.log(val);
// Get sub string
val = s.substring(0, 5);
console.log(val);
// Split into array
val = s.split('');
console.log(val);

*/

/*
// ARRAYS - Store multiple values in a variable
const numbers = [1,2,3,4,5];
const fruits = ['apples', 'oranges', 'pears', 'grapes'];
console.log(numbers, fruits);

// Get one value - Arrays start at 0
console.log(fruits[1]);

// Add value
fruits[4] = 'blueberries';

// Add value using push()
fruits.push('strawberries');

// Add to beginning
fruits.unshift('mangos');

// Remove last value
fruits.pop();

// // Check if array
console.log(Array.isArray(fruits));

// // Get index
console.log(fruits.indexOf('oranges'));

console.log( fruits);

*/

/*
// OBJECT LITERALS - key value pairs
const person = {
  firstName: 'John',
  age: 30,
  hobbies: ['music', 'movies', 'sports'],
  address: { // embeded objects - object inside an object
    street: '50 Main st',
    city: 'Boston',
    state: 'MA'
  }
}

// Get single value
console.log(person.firstName)

// Get array value
console.log(person.hobbies[1]);

// Get embedded object
console.log(person.address.city);

// Add property
person.email = 'jdoe@gmail.com';
console.log(person)

// Array of objects
const todos = [
  {
    id: 1,
    text: 'Take out trash',
    isComplete: false
  },
  {
    id: 2,
    text: 'Dinner with wife',
    isComplete: false
  },
  {
    id: 3,
    text: 'Meeting with boss',
    isComplete: true
  }
];


// Get specific object value
console.log(todos[1].text);

// Format as JSON
console.log(JSON.stringify(todos));

*/

/*
// LOOPS

const todos = [
  {
    id: 1,
    text: 'Take out trash',
    isComplete: false
  },
  {
    id: 2,
    text: 'Dinner with wife',
    isComplete: false
  },
  {
    id: 3,
    text: 'Meeting with boss',
    isComplete: true
  }
];

// For
for(let i = 0; i <= 10; i++){
  console.log(`For Loop Number: ${i}`);
}

// While
let i = 0
while(i <= 10) {
  console.log(`While Loop Number: ${i}`);
  i++;
}

// Loop Through Arrays
// For Loop
for(let i = 0; i < todos.length; i++){
  console.log(` Todo ${i + 1}: ${todos[i].text}`);
}

// For...of Loop
for(let todo of todos) {
  console.log(todo.text);
}

*/

/*
// HIGH ORDER ARRAY METHODS (show prototype)
const todos = [
  {
    id: 1,
    text: 'Take out trash',
    isComplete: false
  },
  {
    id: 2,
    text: 'Dinner with wife',
    isComplete: false
  },
  {
    id: 3,
    text: 'Meeting with boss',
    isComplete: true
  }
];
console.log(todos);

// forEach() - Loops through array
todos.forEach(function(todo) {
  console.log( todo.text) ;
});


// map() - Loop through and create new array
const todoTextArray = todos.map(function(todo) {
  return todo.text;
});

console.log(todoTextArray);



// filter() - Returns array based on condition
const todo1 = todos.filter(function(todo) {
  // Return only todos where id is 1
  return todo.id === 1; 
});

console.log(todo1)
*/

/*
// CONDITIONALS

// Simple If/Else Statement
const x = 30;

if(x == 10) {
  console.log('x is 10');
} else if(x > 10) {
  console.log('x is greater than 10');
} else {
  console.log('x is less than 10')
}

// Switch
color = 'blue';

switch(color) {
  case 'red':
    console.log('color is red');
  case 'blue':
    console.log('color is blue');
  default:  
    console.log('color is not red or blue')
}

// Ternary operator / Shorthand if
const color = x > 10 ? 'red' : 'blue';
 console.log(color)
*/

/*
// FUNCTIONS
function greet(greeting , name) {
  if(!name) {
    // console.log(greeting);
    return greeting;
  } else {
    // console.log(`${greeting} ${name}`);
    return `${greeting} ${name}`;
  }
}

console.log(greet('JavaScript','Learning'));
*/

///*
// ELEMENT SELECTORS

// Single Element Selectors
//console.log(document.getElementById('my-form'));
// console.log(document.querySelector('.container'));

/*
// Multiple Element Selectors
console.log(document.querySelectorAll('.item'));
console.log(document.getElementsByTagName('li'));
console.log(document.getElementsByClassName('item'));
*/
/*
const items = document.querySelectorAll('.item');
items.forEach((item) => console.log(item));
*/

/*
// MANIPULATING THE DOM
const ul = document.querySelector('.items');
//ul.remove();
//ul.lastElementChild.remove();
//ul.firstElementChild.textContent = 'Hello';
//ul.children[1].innerText = 'Brad';
//ul.lastElementChild.innerHTML = '<h1>Hello</h1>';

// const btn = document.querySelector('.btn');
// btn.style.background = 'red';
// */


/*
// EVENTS

// Mouse Event
const btn = document.querySelector('.btn');
const ul = document.querySelector('.items');
btn.addEventListener('click', e => {
  e.preventDefault();
  console.log(e.target.className);
  document.getElementById('my-form').style.background = '#ccc';
  document.querySelector('body').classList.add('bg-dark');
  ul.lastElementChild.innerHTML = '<h1>Changed</h1>';
});


*/

/*
// USER FORM SCRIPT

// Put DOM elements into variables
const myForm = document.querySelector('#my-form');
const nameInput = document.querySelector('#name');
const emailInput = document.querySelector('#email');
const msg = document.querySelector('.msg');
const userList = document.querySelector('#users');

// Listen for form submit
myForm.addEventListener('submit', onSubmit);

function onSubmit(e) {
  e.preventDefault();
  
  if(nameInput.value === '' || emailInput.value === '') {
    // alert('Please enter all fields');
    msg.classList.add('error');
    msg.innerHTML = 'Please enter all fields';

    // Remove error after 3 seconds
    setTimeout(() => msg.remove(), 3000);
  } else {
    // Create new list item with user
    const li = document.createElement('li');

    // Add text node with input values
    li.appendChild(document.createTextNode(`${nameInput.value}: ${emailInput.value}`));

    // Add HTML
    // li.innerHTML = `<strong>${nameInput.value}</strong>e: ${emailInput.value}`;

    // Append to ul
    userList.appendChild(li);

    // Clear fields
    nameInput.value = '';
    emailInput.value = '';
  }
}
*/
