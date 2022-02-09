# HTML basics

> Before we begin
This is a beginners html scripting
Little to no CSS 
Focus on HTML scripting

## What is HTML

```bash
1. Hyper Text Markup Languade
2. Not a Programming Language
3. Markup language for creating webpages/documents
4. Building blocks of Web

Note : HTML is used strictly for presentation of your content like text paragraph, header, bubllet list, image or many other things. 
There is no logic or actual programming.

Programming Language could be Javascript,PHP are responsible for connecting to a backend database, implementing dynamic 
funcationality etc for your html webpage
```

## Creating an HTML File

```bash
1. Do not need a server
2. File must have an .html extension
3. Runs on Web browser(chrome,firefox,safari,edge etc)
4. index.html is the root/home page of any website

Note - In real life scenario, when your website is ready to be deployed on internet, you will need to buy domin name and host you website and all your packages there !!

Example 1 - If you visit any website
1. http://something.com
>>Loads the index.html file
2. http://something.com/about.html
>>loads the about.html file


```

## Create an index.html file

```bash
Type in "Hello World" and save the file and run on the browser

```

## HTML Tag Syntax

```bash
1. Elements names surrounded by angle brackets
2. Normally come in pairs (Start tag and end tag)
3. End tag is usually same but with a forward slash
4. Some tags close themselves

Example
<tagname>content</tagname>
<h1>About us</h1>
<p>This is a paragraph</p>
<br> or <br/> Self closing tags 

```

lab5/html/images/HTML.png
## HTML Page Structure

![alt text](https://github.com/yogeshoyadav08/Comp5531Database-Webtechnology/blob/main/lab5/html/images/HTML.png?raw=true)


## Simple HTML Page with title tag

```bash
<!DOCTYPE html>
<html>
	<head>
		<title>HTML basics</title>
	</head>
	<body>
	</body>
</html>

```

## Add Headers in body tag

```bash
<!DOCTYPE html>
<html>
	<head>
		<title>HTML basics</title>
	</head>
	<body>
		<!-- Headings -->
		<h1>Heading One</h1>
		<h2>Heading Two</h2>
		<h3>Heading Three</h3>
		<h4>Heading Four</h4>
		<h5>Heading Five</h5>
		<h6>Heading Six</h6>
	</body>
</html>
```

## Add Paragraphs in the body tag

```bash
<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>

```

## Inline vs Block level Elements

![alt text](https://github.com/yogeshoyadav08/Comp5531Database-Webtechnology/blob/main/lab5/html/images/inline.png?raw=true)

## Add strong and emphasize tag in your <p>

```bash
<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor <strong>incididunt ut labore</strong> et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud <em>exercitation ullamco</em> laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
```

## Add Links using href

```bash
<a href="http://google.com">Links</a>
<a href="about.html">Links</a>
<a href="#">Links</a>

Opens in New Tab
<a href="http://google.com" target="_blank">Links</a>

```

## Tag Attributes
![alt text](https://github.com/yogeshoyadav08/Comp5531Database-Webtechnology/blob/main/lab5/html/images/tagattributes.png?raw=true)

## Add Lists - Unordered and Ordered List

```bash
		<!-- Lists -->
		<ul>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
			<li>List Item 4</li>
		</ul>

		<ol>
			<li>List Item 1</li>
			<li>List Item 2</li>
			<li>List Item 3</li>
			<li>List Item 4</li>
		</ol>
```

## Add tables

```bash
		<!-- Table -->
		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Age</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Brad Traversy</td>
					<td>brad@something.com</td>
					<td>35</td>
				</tr>
				<tr>
					<td>John Doe</td>
					<td>jdoe@something.com</td>
					<td>45</td>
				</tr>
				<tr>
					<td>Sara Williams</td>
					<td>sara@something.com</td>
					<td>25</td>
				</tr>
			</tbody>
		</table>
```

## Simple HTML Forms

```bash
<form action="process.php" method="POST">
			<div>
				<label>First Name</label>
				<input type="text" name="firstName">
			</div>
			<br>
			<div>
				<label>Last Name</label>
				<input type="text" name="lastName">
			</div>
			<br>
</form> 

```

## Add Email label

```bash
<div>
				<label>Email</label>
				<input type="email" name="email">
			</div>
			<br>
```
## Add Text message label


```bash
<div>
				<label>Message</label>
				<textarea name="message"></textarea>
			</div>
			<br>
```
## Add Label having Options

```bash
<div>
				<label>Gender</label>
				<select name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
					<option value="other">Other</option>
				</select>
			</div>
			<br>
```
## Add Age and Date label

```bash
<div>
					<label>Age:</label>
					<input type="number" name="age" value="30">
				</div>
				<br>
				<div>
					<label>Birthday:</label>
					<input type="date" name="birthday">
				</div>
				<br>

```
## Add Place holder for label tags

```bash
<div>
				<label>First Name</label>
				<input type="text" name="firstName" placeholder="Enter first name">
			</div>
			<br>
			<div>
				<label>Last Name</label>
				<input type="text" name="lastName" placeholder="Enter last name">
			</div>
			<br>
```
## Add Submit Button

```bash
<input type="submit" name="submit" value="Submit">
```
## Add Button

```bash
<!-- Button -->
		<button>Click Me</button>

```
## Add Images

```bash
<a href="images/sample.jpg">
			<img src="images/sample.jpg" alt="My Sample Image" >
</a>


```
##  Adjust the size of your image 

```bash
<a href="images/sample.jpg">
			<img src="images/sample.jpg" alt="My Sample Image" width="200">

```

##  Add Links to your image 

```bash
<a href="images/sample.jpg">
			<img src="images/sample.jpg" alt="My Sample Image" width="200">
</a>

```

##  HTML Semantics
![alt text](https://github.com/yogeshoyadav08/Comp5531Database-Webtechnology/blob/main/lab5/html/images/htmlsemantics.png?raw=true)

##  Create a New File - blog.html

```bash
<!DOCTYPE html>
<html>
<head>
	<title>My Blog</title>
	<meta name="description" content="Awesome blog by Traversy Media">
	<meta name="keywords" content="web design blog, web dev blog, traversy media">
	<style type="text/css">
		#main-header{
			text-align:center;
			background-color:black;
			color:white;
			padding:10px;
		}

		#main-footer{
			text-align: center;
			font-size:18px;
		}
	</style>
</head>
<body>
	<header id="main-header">
		<h1>My Website</h1>
	</header>

	<a href="index.html">Go to index</a>

	<section>
		<article class="post">
			<h3>Blog Post One</h3>
			<small>Posted by Brad on July 17</small>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="post.html">Read More</a>
		</article>

		<article class="post">
			<h3>Blog Post Two</h3>
			<small>Posted by Brad on July 17</small>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="post.html">Read More</a>
		</article>

		<article class="post">
			<h3>Blog Post Three</h3>
			<small>Posted by Brad on July 17</small>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a href="post.html">Read More</a>
		</article>
	</section>

	<aside>
		<h3>Categories</h3>
		<nav>
			<ul>
				<li><a href="#">Category 1</a></li>
				<li><a href="#">Category 2</a></li>
				<li><a href="#">Category 3</a></li>
			</ul>
		</nav>
	</aside>

	<footer id="main-footer">
		<p>Copyright &copy; 2017, My Website</p>
	</footer>
</body>
</html>

```
##  Create a Survey Form
![alt text](https://github.com/yogeshoyadav08/Comp5531Database-Webtechnology/blob/main/lab5/html/images/survey.png?raw=true)
