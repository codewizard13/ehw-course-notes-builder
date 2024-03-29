<!-- <h1 class="correct"><span style="color: initial">THIS FILE: </span><?php echo basename(__FILE__) ?></h1> -->

<h1 id="videos">VIDEOS</h1>

<h2 id="0-introduction">0. Introduction</h2>
<h3 id="00-javascript-the-soil-from-which-the-modern-web-grows">0.0 JavaScript: The soil from which the modern web grows</h3>
<ul>
 	<li>The modern web runs on JavaScript</li>
 	<li>Foundational elements of JS</li>
 	<li>JAMstack</li>
 	<li>HTML is language of web content, CSS is language of web style, JS is
language the binds it all together</li>
 	<li>This course deep understanding of modern JS</li>
 	<li>JS primary lang for everything we do on web</li>
</ul>
<h3 id="01-how-to-use-the-exercise-files">0.1 How to use the exercise files</h3>
<ul>
 	<li>Ex files avail from GitHub</li>
 	<li>Folder with e suffix represent the end state</li>
 	<li>PDF attached</li>
 	<li>Link to doc or code refs in many exercise files</li>
</ul>
<h2 id="1-javascript-a-brief-introduction">1. JavaScript: A Brief Introduction</h2>
<h3 id="10-javascript-first-contact">1.0 JavaScript: First contact</h3>
<ul>
 	<li>A new era of web dev</li>
 	<li>JS on browser, server, localhost</li>
</ul>
<!-- h4 will represent slides in many cases-->
<h4 id="apply-practical-skils">Apply practical skils</h4>
<ul>
 	<li>Modern JS &amp; tooling</li>
 	<li>JSX &amp; Typescript</li>
 	<li>Frameworks</li>
 	<li>We are going to start with complex and then break it down</li>
 	<li>Typical react component is long and complex</li>
</ul>
<h4 id="jsx">JSX</h4>
<ul>
 	<li>A syntax extension of JS created for the React JS framework</li>
 	<li>If I'm going to learn React should I just learn JSX?</li>
 	<li>NO! JSX is an extension, so you still need basics</li>
 	<li>If you undestand the basics you will be able to quickly pickup JSX and
other JS flavors</li>
</ul>
<h4 id="components">Components</h4>
<ul>
 	<li>Objects</li>
 	<li>Methods</li>
 	<li>Functions</li>
 	<li>Template Literals</li>
 	<li>Arrays</li>
 	<li>At end of course we will return to this component and you will be able
to make sense of it</li>
</ul>
<h3 id="11-navigating-the-js-landscape">1.1 Navigating the JS landscape</h3>
<ul>
 	<li>Overwhelmed by that all the JS flavors</li>
 	<li>Vanilla Javascript</li>
 	<li>ES2015</li>
 	<li>Babel</li>
 	<li>React</li>
 	<li>Vue.js</li>
 	<li>ECMAScript</li>
 	<li>CoffeScript</li>
 	<li>JSX</li>
 	<li>TypeScript</li>
 	<li>Angular</li>
 	<li>ES6</li>
 	<li>WebPack</li>
 	<li>Node.js</li>
 	<li>Gulp</li>
 	<li>JS is constantly evolving</li>
</ul>
<h4 id="mortens-incomplete-guide-to-navigating-the-js-landscape">Morten's Incomplete Guide to Navigating the JS Landscape:</h4>
<ul>
 	<li>Javascript: the core lang; sometimes referred to as vanilla JS</li>
 	<li>This is what we will cover in this course</li>
 	<li>ECMAScript: browser specification of the JS lang. not the lang itself,
but official description of how the lang should be interpreted by
browsers</li>
 	<li>Cutting edge</li>
 	<li>Babel.js: Use to convert modern JS into plain JS the browser can read</li>
 	<li>JS is an opinionated coding lang</li>
 	<li>TypeScript: variation, dialect, or flavor of JS introducing features
like <strong>strong typing</strong></li>
 	<li>Abstracted versions of JS with additional features.</li>
 	<li>.ts ext</li>
 	<li>CoffeeScript: another dialect of JS</li>
 	<li>React, Vue, Angular: JS frameworks allowing us to write JS-based
font-end apps. Adds abstraction layer on top of JS</li>
 	<li>Introduce new coding convention like JSX and reliance on tools like
Beble, WebPack, and Node.js</li>
 	<li></li>
 	<li>npm, WebPack, Gulp: Build tools and infrastructure to automate the
process of optimizing human-readable JavaScript for the best browser
performance</li>
 	<li>Node.js: JS server runtime used to run JS everywhere; used to run npm,
WebPack, Babel, and more on your computer</li>
</ul>
TAKEAWAY:
<ul>
 	<li>Learn JS first then optimize and specialize your knowledge</li>
</ul>
<h3 id="12-tools-for-working-with-javascript">1.2 Tools for working with JavaScript</h3>
<ul>
 	<li>Modern browser: ideally all the browsers for testing (Chrome, Firefox)</li>
 	<li>Code editor: VS Code is becoming industry standard. Highlight code as
you work</li>
 	<li>Live server env: extension for VS Code or similar. Efficieny</li>
 	<li>Browser console: included with every browser</li>
 	<li>Live Server (Ritwick Dey)</li>
</ul>
<h3 id="13-linting-and-formatting">1.3 Linting and formatting</h3>
<ul>
 	<li>Morten is dyslexic</li>
 	<li>Code highlighter helps, but other extensions help</li>
 	<li>ESLint: helps auto detect coding errors and can do basic cleanup auto</li>
 	<li>Prettier: helps auto clean up your formatting</li>
 	<li>Both require Node.js (install Node.js via download)</li>
</ul>
<h4 id="install-npm">Install NPM</h4>
<ul>
 	<li>Navigate to Terminal install</li>
 	<li><code>npm install</code>: node package manager goes on the internet and
pulls everything into VS code to get prettier and eslint to work</li>
 	<li>With prettier you can set what rules to enforce</li>
</ul>
<h3 id="14-get-to-know-the-browser-console">1.4 Get to know the browser console</h3>
<ul>
 	<li>JS doesn't run in the code editor it runs in the browser</li>
</ul>
EX: 01_05 Script.js
<ul>
 	<li>Click Go Live at bottom bar of VSCode</li>
 	<li>Go to current folder 01_05</li>
 	<li>Open console</li>
 	<li><code>window.document</code></li>
 	<li><code>backpack</code> hit right key for autocomplete</li>
 	<li><code>backpack.toggleLid(true)</code></li>
 	<li><code>backpack</code>: lid is still set to true</li>
</ul>
<h3 id="15-javascript-language-basics">1.5 JavaScript language basics</h3>
EX: 01_06
<ul>
 	<li>Write JS top to bottom</li>
 	<li>Define functions top before you use them</li>
 	<li>Code comments: green</li>
 	<li><strong>JS Doc:</strong> Verbose comment:/** [ENTER]:</li>
</ul>
<pre class="EnlighterJSRAW" data-enlighter-language="js">/**
   * function updateBackpack()
   * Outputs HTML
   * @param {string} update
   */&lt;/pre &gt;</pre>
<ul>
 	<li>CTRL + /: quickly comment / uncomment code</li>
 	<li>Whitespace is just for humans. #BESTPRACTICE: Use indentation to
indicate visual hierarchy</li>
 	<li>Change Tab indent size by clicking <code>Spaces:2</code> on VSCode
bottom bar</li>
 	<li>Semicolons: JS doesn't care if semicolons or not. If anyone tells you it
is wrong to do one or the other, it's not true. This is purely developer
preference.</li>
 	<li>#BESTPRACTICE: Be consistent with double quotes and single quotes</li>
 	<li>#BESTPRACTICE: Use tools like Prettier and ESLint to automatically
enforce that consistency</li>
</ul>
<h3 id="16-learning-javascript-backward">1.6 Learning JavaScript backward</h3>
<ul>
 	<li>When you learn JS for the first time you typically start with the
basics.</li>
 	<li>But, due to the popularity of JS frameworks like React an Vue, today the
first intro many people have to JS is through
<strong>advanced objects and methods</strong>.</li>
 	<li>For this reason, we'll start with objects / methods, then Data Types and
DOM, finally functions, methods, events at end.</li>
 	<li>Learning JS requires understing basics and patterns, but also
<strong>
<em>Finding ways to make them make sense to you</em>
</strong></li>
 	<li>With examples first, you will see the context and then ask why questions</li>
 	<li>Open-ended practice assigments thorughout the course</li>
 	<li>Refer to MDN Web Docs as part of your process</li>
 	<li>Make documentation part of your learing journey</li>
 	<li>Documentation-based process for robust learning</li>
</ul>
<h3 id="17-chapter-quiz">1.7 Chapter Quiz</h3>
What is an indicator of someone being a good JavaScript developer? They
follow standards, invest in learning, use formatting and linting tools for
consistency, and write accessible code.
<h2 class="error">BOOKMARK</h2>
<h3 id="2-up-and-running-with-js">2. Up and Running with JS</h3>
<h3 id="20-javascript-in-an-html-document">2.0 JavaScript in an HTML document</h3>
<ul>
 	<li>Where does jS live? Where do you actually write the code?</li>
 	<li>Inline (using <code>style</code> tag)</li>
</ul>
EX: 02_01
<ul>
 	<li>#BESTPRACTICE: Add script tag at end right before closing
<code>body</code> tag</li>
 	<li>Anything inside the script tag will automatically be rendered as
javascript</li>
 	<li>Can technically place script tag anywhere in the doc</li>
</ul>
Why is script tag placed at bottom?
<ul>
 	<li>When browser encounters script tag all rendering stops</li>
 	<li>But, this is an <strong>antipattern</strong>: we have more better modern
ways of loading JS</li>
</ul>
<h3 id="21-javascript-as-an-external-file">2.1 JavaScript as an external file</h3>
<ul>
 	<li>Writing inline jS is edge case: only applies to current doc and nowhere
else</li>
 	<li>#BESTPRACTICE: Put script in its own file and reference the stylesheet
in whatever file you want to use it in</li>
</ul>
EX: 02_02
<ul>
 	<li>index.html references script.js with the <code>src</code> attribute</li>
 	<li>This error is noted in the course:</li>
</ul>
<aside class="error">Uncaught TypeError: Cannot read property 'appendChild' of null at
script.js:50</aside>
<ul>
 	<li>#SOLVED: This is caused by the script being run in the head before the
page has been rendered</li>
</ul>
<h3 id="22-modern-javascript-loading">2.2 Modern JavaScript loading</h3>
<ul>
 	<li>Browser reads HTML top to bottom line by line and fetch and execute any
elements it encounters</li>
</ul>
<blockquote class="pullquote">When you open an HTML document in the browser, the browser will read that
document line by line from the top down and fetch and execute any element
it encounters as necessary.</blockquote>
02_03
<ul>
 	<li>Typical header: references to scripts and external stylesheets</li>
 	<li>As browser encouters calls, stop renering, goes and gets external files,
executes what external files tell it, then continues rendering</li>
 	<li>The error in the console is a result of the JS referenced and run in the
browser before the element it is acting upon is rendered.</li>
</ul>
<blockquote>It can't do what the JavaScript is trying to do because elements don't yet
exist.</blockquote>
<ul>
 	<li>The traditional solution: move script tag to end of doc so browser only
encounters it when it has finished rendering the whole doc. Not really a
solution though, actually a #HACK / #WORKAROUND</li>
 	<li>#GOTCHA: some JS should run at the beginning or while the doc is being
loaded</li>
 	<li>New tools in JS to tightly control when and how JS is loaded:
<strong>async</strong> and <strong>defer</strong> keywords</li>
</ul>
<h4 id="default-behavior">Default Behavior</h4>
<ul>
 	<li>Browser stops rendering when JS is encountered. JS is executed before
rendering continues. Often referred to a
<strong>content blocking</strong> or <strong>render blocking</strong>.</li>
</ul>
<img src="img/screen-course-linkedin--js-ess-2021-1.jpg" alt="" />
<ul>
 	<li>Blocks rendering of content of page and can cause page to load slower</li>
 	<li><strong>Async</strong>: tells browser to keep parsing HTML while JS is
downloaded and only stop rendering once you have downloaded the JS</li>
</ul>
<h4 id="async">async</h4>
<ul>
 	<li>Browser downloads JS in parallel while HTML renders. When JS is fully
loaded, rendering stops while JS is executed.</li>
</ul>
<img src="img/screen-course-linkedin--js-ess-2021-2.jpg" alt="" />
<ul>
 	<li>Dramatically shortens time it takes for browser to execute everything
and there is only a short render blocking issue</li>
 	<li><strong>defer</strong>:</li>
</ul>
<h4 id="defer">defer</h4>
<ul>
 	<li>Browser downloads JS in parallel while HTML renders, then defers
execution of JS until HTML rendering is complete</li>
</ul>
<img src="img/screen-course-linkedin--js-ess-2021-3.jpg" alt="" />
<ul>
 	<li>At end of script tag in index.html add the <code>defer</code> keyword</li>
</ul>
<pre class="EnlighterJSRAW" data-enlighter-language="html">&lt;script scr="script.js" defer&gt;&lt;/script&gt;&lt;/pre &gt;</pre>
<ul>
 	<li>We are deferring the execution of the script until everything esle has
been rendered</li>
 	<li>#BESTPRACTICE: async/defer should be the standard. Only use render
blocking when you have a specific reason. Loading JS in the footer is
now an <strong>anti-pattern</strong>.</li>
</ul>
<blockquote>async/defer should be the standard. Only use render blocking when you have
a specific reason. Loading JS in the footer is now an anti-pattern.</blockquote>
<ul>
 	<li>From now on: load JS in the header then use async or defer to control
when the js is loaded in the doc</li>
</ul>
<h3 id="23-javascript-modules">2.3 JavaScript modules</h3>
<ul>
 	<li>As you start working with JS you will notice files get large and hard to
work with, requires scrolling up and down. #SOLUTION: JS modules</li>
 	<li>JS modules: allow us to break pieces out of a JS file into separate
files and then import back into the original file again</li>
</ul>
02_04 script.js
<ul>
 	<li>at top of script.js</li>
</ul>
<pre class="EnlighterJSRAW" data-enlighter-language="js">import backpack from "./backpack.js"&lt;/pre &gt;</pre>
<ul>
 	<li>constant called <code>backpack</code> is what is being imported from
backpack.js</li>
 	<li>at bottom of backpack.js</li>
</ul>
<pre class="EnlighterJSRAW" data-enlighter-language="js">export default backpack&lt;/pre &gt;</pre>
<ul>
 	<li>export tells browser that the entity (const) can be used by any other
file it is imported into</li>
 	<li>To get this work in HTML, tell browser the files are modules (auto
deferred)</li>
 	<li>Modules are an advanced and new feature in modern JS. But, is standard
practice with React and Vue</li>
</ul>
<pre class="EnlighterJSRAW" data-enlighter-language="html">&lt;!DOCTYPE html&gt;
  &lt;html lang="en"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8" /&gt;
      &lt;meta http-equiv="X-UA-Compatible" content="IE=edge" /&gt;
      &lt;meta name="viewport" content="width=device-width, initial-scale=1.0" /&gt;
      &lt;title&gt;Module Demo&lt;/title&gt;
      &lt;script type="module" src="backpack.js"&gt;&lt;/script&gt;
      &lt;script type="module" src="script.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;&lt;/body&gt;
  &lt;/html&gt;&lt;/pre &gt;
      #GOTCHA: Can't call backpack object in console, because it is only
    scoped to the file, not to the browser</pre>
<ul>
 	<li>As of 2021, modules are cutting edge JS</li>
</ul>
<h3 id="24-chapter-quiz">2.4 Chapter Quiz</h3>
<h4 id="when-does-the-browser-execute-javascript">When does the browser execute JavaScript?</h4>
By default: When the script is encountered. If the script is set to "async",
when the script is fully loaded. If the script is set to "defer", when the
entire HTML page is rendered.
<h4 id="what-is-the-correct-markup-for-adding-an-external-javascript-file-to-an-html-document">What is the correct markup for adding an external JavaScript file to an
HTML document?</h4>
<script src="javascript.js" async></script>
While <code>&lt;script src="javascript.js"&gt;&lt;/script&gt;</code> is
technically correct, it is recommended to always async or defer your script
unless you have a specific reason for the script to cause render blocking.
<h4 id="what-happens-when-you-defer-javascript">What happens when you defer JavaScript?</h4>
The browser loads the JavaScript asynchronously when it is encountered, then
waits until all HTML is rendered before executing the script.
<h4 id="javascript-modules-are-heavily-used-in-frameworks-like-react-and-vue-what-is-the-advantage-of-using-modules">JavaScript modules are heavily used in frameworks like React and Vue. What
is the advantage of using modules?</h4>
Modules enable modularization of code where individual functions,
components, data objects, and other parts can be separated into individual
files.
<h3 id="3-objects">3. Objects</h3>
<h3 id="30-objects-a-practical-introduction">3.0 Objects: A practical introduction</h3>
<ul>
 	<li>JS is prototype based</li>
 	<li>At core we are working with objects based on prototypes</li>
 	<li>Quickest path to understand JS is understanding what objects are and how
they work</li>
 	<li>Object in JS represents object in real life</li>
</ul>
EX:
<ul>
 	<li>Backpack is an object</li>
 	<li>Pockets, straps, zippers are object properties</li>
 	<li><strong>object properties:</strong> Define the specifics of each unique
object</li>
 	<li>Each object is a unique instance of an object prototype.</li>
</ul>
<blockquote>Each object is a unique instance of an object prototype.</blockquote>
<ul>
 	<li>A thing is type of object because it shares common properties which
define them as belonging to the backpack category</li>
 	<li>The particular combination and config of these properties define each
individual backpack.</li>
 	<li>Changing the property values can create new backpacks</li>
 	<li>Prototype based OOP allows us to categorize things by similarities</li>
 	<li>Objects have features that allow us to change their properties (state)</li>
</ul>
EX: lid can open and close
<ul>
 	<li><strong>method:</strong> property-changing features inside objects</li>
 	<li>methods act on current object only</li>
 	<li>Objects can contain other objects</li>
 	<li>Objects inside other objects are properties of those objects</li>
</ul>
<h3 id="31-javascript-objects-the-code-version">3.1 JavaScript objects: The code version</h3>
<ul>
 	<li>javascript object: collection of data and functionality stored as
properties and methods that describe the object and what it can do</li>
 	<li>To define object / create it: use variable to hold object</li>
 	<li>Modern convention: use <code>const</code></li>
</ul>
<pre class="EnlighterJSRAW" data-enlighter-language="js">const backpack = {
      volume: 30,
  }&lt;/pre &gt;</pre>
<ul>
 	<li>variables hold data</li>
 	<li>curly brackets: say this is a js object</li>
 	<li>properties: key-value pair separated by a colon. Can even be another
object or array. can nest sub-objects. separate with comma. convention
is put each on own like</li>
 	<li>object can have as many properties as it needs</li>
 	<li>methods: change properties of object. also name-value pairs, but in
method the value is a function</li>
 	<li>this: "this" keyword refers to the current object. "This object right
here"</li>
</ul>
EX:
<pre class="EnlighterJSRAW" data-enlighter-language="js">const backpack = {
    name: "Everyday Backpack",
    volume: 30,
    color: "grey",
    pocketNum: 15,
    strapLength: {
      left: 26,
      right: 26,
    },
    lidOpen: false,
    toggleLid: function (lidStatus) {
      this.lidOpen = lidStatus
    },
    newStrapLength: function (lengthLeft, lengthRight) {
      this.strapLength.left = lengthLeft
      this.strapLength.right = lengthRight
    },
  }&lt;/pre &gt;</pre>
<h3 id="32-object-containers">3.2 Object containers</h3>
<ul>
 	<li>const: a variable / container</li>
</ul>
<h4 id="objects-are-typically-constants">Objects are Typically Constants</h4>
<ul>
 	<li>We can change the properties of the object inside the container. We
can't remove or replace the object from the container.</li>
</ul>
EX: 03_03
<ul>
 	<li>Type <code>backpack</code> in console</li>
 	<li>Type <code>backpack = 5</code></li>
</ul>
<aside class="error">Uncaught TypeError: Assignment to constant variable. at
&lt;anonymous&gt;1:10</aside>
<ul>
 	<li>can't change a constant to something entirely different (object to
integer, for instance). Properties CAN be changed</li>
 	<li>This way you don't accidentaly destroy your object while working with it</li>
</ul>
<h3 id="33-object-properties">3.3 Object properties</h3>
<ul>
 	<li>Defined with colon-separated key-value pair</li>
 	<li>key: any string</li>
 	<li>value: string in quotes, int, float, boolean, array, object</li>
 	<li>prop names: letters, digits, $, _</li>
 	<li>#ROT: use <strong>camelCase</strong> for property names</li>
</ul>
<aside class="notice rot">
<div><span class="label">#ROT:</span> use camelCase for property names</div>
</aside>
<h3 id="34-accessing-objects">3.4 Accessing objects</h3>
<ul>
 	<li>To access ojbejcts in JS call it by name</li>
</ul>
EX: 03_05
<ul>
 	<li>Type in console: <code>backpack</code></li>
</ul>
<ul>
 	<li>Click arrows on object to view properties</li>
</ul>
<h4 id="console-methods">Console methods</h4>
<ul>
 	<li>console.log(): tells browser to print the object in the console
automatically</li>
 	<li>console.log("The backpack object:", backpack) // comma tells browser to
add a space</li>
</ul>
<h3 id="35-accessing-object-properties">3.5 Accessing object properties</h3>
<ul>
 	<li>Two ways of accessing properties: dot notation and bracket notation</li>
</ul>
EX: 03_06
<ul>
 	<li>Looking at dot notation first.</li>
 	<li>At bottom of script.js,</li>
</ul>
<pre class="EnlighterJSRAW" data-enlighter-language="generic">console.log("The pocketNum value:", backpack.pocketNum)&lt;/pre &gt;</pre>
<ul>
 	<li>VSCode will automatically code hint the functions available to use</li>
 	<li>properties of nested objects</li>
</ul>
<pre class="EnlighterJSRAW" data-enlighter-language="generic">console.log("Strap length L:", backpack.strapLength.left)&lt;/pre &gt;</pre>
<ul>
 	<li>Bracket notation: useful if you need more control or have non-standard
names</li>
</ul>
<pre class="EnlighterJSRAW" data-enlighter-language="generic">console.log("The pocketNum value:", backpack["pocketNum"])&lt;/pre &gt;
      EX: Pass property value as a variable (
</pre>
<strong>variable variable</strong>
<pre class="EnlighterJSRAW" data-enlighter-language="generic">)</pre>
<pre class="EnlighterJSRAW" data-enlighter-language="generic">var query = "pocketNum"
  console.log("The pocketNum value:", backpack[query])&lt;/pre &gt;</pre>
<ul>
 	<li><strong>#GOTCHA:</strong> Variable variables can't be done with dot
notation</li>
 	<li>3rd use case for bracket notation: nothing prevents you or software from
creating prop names that break the naming conventions. Bracket notation
will allow you access non-standard names via bracket notation because
property is enclosed in quotes.</li>
</ul>
<h3 id="36-practice-build-a-new-object">3.6 Practice: Build a new object</h3>
<ul>
 	<li>Pause video to play around with your new-found knowledge</li>
</ul>
EX: practice &gt; 03_07
<h4 id="practice">Practice</h4>
First practice assignment. Take objects within reach and turn them into a JS
object.
<ol>
 	<li>Give each object an identifiable name.</li>
 	<li>Create properties to describe the objects and set their values.</li>
 	<li>Find an object that has another object inside of it to create a nested
object.</li>
</ol>
<h3 id="37-object-methods">3.7 Object methods</h3>
EX: 03_08
<ul>
 	<li><strong>methods:</strong> functions inside methods</li>
 	<li>Two syntaxes for methods: function expression and shorthand</li>
 	<li><strong>function expression:</strong> explicitly says "function"</li>
</ul>
<!-- CODE -->
<code></code>
<div>toggleLid:
<span class="hljs-function">
<span class="hljs-keyword">function</span> (
<span class="hljs-params">lidStatus</span>) &lt;/span &gt;{ <span class="hljs-keyword">this</span>.lidOpen = lidStatus } </span></div>
<!-- CODE -->
<ul>
 	<li><strong>Shorthand:</strong> harder to read</li>
</ul>
<!-- CODE -->
<code></code>
<div>toggleLid(lidStatus) { <span class="hljs-keyword">this</span>.lidOpen =
lidStatus }</div>
<!-- CODE -->
<ul>
 	<li>#BESTPRACTICE: Convention is to use function expression for clarity</li>
</ul>
How Method works:
<ul>
 	<li><strong>parameter:</strong> a piece of data we can pass to the function.
AKA arguments</li>
 	<li><strong>function:</strong> a program that does something / changes a
falue</li>
 	<li>make a function run with <strong>function call</strong></li>
 	<li>function call: typing the function name with empty parens or parens
holding params</li>
 	<li>in console,</li>
</ul>
<!-- CODE -->
<code></code>
<div>backpack.lidOpen
<span class="hljs-comment">// false</span> backpack.toggleLid(
<span class="hljs-literal">true</span>)
<span class="hljs-comment">// undefined</span> backpack.lidOpen
<span class="hljs-comment">// true</span></div>
<!-- CODE -->
<ul>
 	<li>The value only changes in the user's browser at that moment</li>
</ul>
<!-- CODE -->
<code></code>
<div><span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"Left before:"</span>,
backpack.strapLength.left)
<span class="hljs-comment">// 26</span> backpack.newStrapLength(
<span class="hljs-number">10</span>, <span class="hljs-number">15</span>)
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"Left after:"</span>, backpack.strapLength.left)
<span class="hljs-comment">// 10</span></div>
<!-- CODE -->
<h3 id="38-practice-build-a-new-method">3.8 Practice: Build a new method</h3>
EX: Practice &gt; 03_09
<ul>
 	<li>Create new methods in this object, one to change each property</li>
</ul>
<ol>
 	<li>Pass value to func inside the parens</li>
 	<li>Refer to current obj as "this"</li>
 	<li>Assign any value to any property</li>
</ol>
<h4 id="my-practice-results">My Practice Results</h4>
<!-- CODE -->
<code></code>
<div><span class="hljs-comment">/** * Practice: Making methods * * - Create a method for each object
property. * - The method receives a value to match the property to be
changed. * - Create a simple function to replace the current property
value with the received value. * - Test the method by sending new values
and checking the properties in the console. */&lt;/span &gt;
<span class="hljs-comment">/* Eric Hepperle 2022-11-23 */</span>
<span class="hljs-keyword">const</span> backpack = {
<span class="hljs-attr">name</span>:
<span class="hljs-string">"Everyday Backpack"</span>,
<span class="hljs-attr">volume</span>:
<span class="hljs-number">30</span>, <span class="hljs-attr">color</span>:
<span class="hljs-string">"grey"</span>,
<span class="hljs-attr">pocketNum</span>:
<span class="hljs-number">15</span>,
<span class="hljs-attr">strapLength</span>: {
<span class="hljs-attr">left</span>: <span class="hljs-number">26</span>,
<span class="hljs-attr">right</span>: <span class="hljs-number">26</span>,
}, <span class="hljs-attr">toggleLid</span>:
<span class="hljs-function">
<span class="hljs-keyword">function</span> (
<span class="hljs-params">lidStatus</span>) &lt;/span &gt;{ <span class="hljs-keyword">this</span>.lidOpen = lidStatus; },
<span class="hljs-attr">newStrapLength</span>:
<span class="hljs-function">
<span class="hljs-keyword">function</span> (
<span class="hljs-params">lengthLeft, lengthRight</span>) &lt;/span &gt;{ <span class="hljs-keyword">this</span>.strapLength.left = lengthLeft;
<span class="hljs-keyword">this</span>.strapLength.right = lengthRight; },
<span class="hljs-attr">setName</span>:
<span class="hljs-function">
<span class="hljs-keyword">function</span> (
<span class="hljs-params">newName</span>) &lt;/span &gt;{ <span class="hljs-keyword">this</span>.name = newName },
<span class="hljs-attr">setVolume</span>:
<span class="hljs-function">
<span class="hljs-keyword">function</span> (
<span class="hljs-params">newVol</span>) &lt;/span &gt;{ <span class="hljs-keyword">this</span>.volume = newVol },
<span class="hljs-attr">setColor</span>:
<span class="hljs-function">
<span class="hljs-keyword">function</span> (
<span class="hljs-params">newColor</span>) &lt;/span &gt;{ <span class="hljs-keyword">this</span>.color = newColor
<span class="hljs-keyword">if</span> (newColor ===
<span class="hljs-string">'red'</span>) {
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">`JACKPOT!!!`</span>) } },
<span class="hljs-attr">setPocketNum</span>:
<span class="hljs-function">
<span class="hljs-keyword">function</span> (
<span class="hljs-params">numPockets</span>) &lt;/span &gt;{ <span class="hljs-keyword">this</span>.pocketNum = numPockets }, }; </span></span></span></span></span></span></span></div>
<!-- CODE -->
<h3 id="39-classes-object-blueprints">3.9 Classes: Object blueprints</h3>
<ul>
 	<li>Classes relatively new to JS</li>
 	<li>Classes reduce repetion by acting as templates for object types</li>
 	<li>Any time you create a new instance of a class it automatically gets all
the same properties and methods of the class</li>
</ul>
<blockquote>Classes work as templates for an object type. And any time you create a
new object based on a class, that object automatically gets all the
properties and the methods from that class.</blockquote>
EX: 03_10 (significant changes to backback class)
<h4 id="to-create-a-class">To Create a Class</h4>
<ul>
 	<li>Start with class keyword followed by capitalized name</li>
 	<li>convention shows we are looking at class as opposed to a regular object</li>
 	<li><strong>Backpack.js</strong>: new file that exports a Backpack class</li>
 	<li>export default Backpack</li>
 	<li>in script.js import Backpack at top</li>
 	<li>in index.html import both JS files as modules (to have files depend on
each other)</li>
 	<li>Class is only used in the JS, not accessible from browser</li>
 	<li>Two ways to declare a class: class declaration and class expression</li>
 	<li>class declaration: class Name {}</li>
 	<li>class expression: const Name = class {}</li>
 	<li>The choice is user preference, they do the same thing</li>
 	<li>#BESTPRACTICE: Current trend is use class expression</li>
 	<li>constructor method: defines params for each prop in parens, then inside
curly brackets defines all properties and sets values from params</li>
 	<li>add class methods after constructor method</li>
</ul>
<div class="code-filename">Backpack.js</div	>

<!-- CODE -->
<code></code>
<div><span class="hljs-comment">/** * Creating classes: * * Class declaration: class Name {} * Class
expression: const Name = class {} */&lt;/span &gt;
<span class="hljs-class">
<span class="hljs-keyword">class</span>
<span class="hljs-title">Backpack</span> &lt;/span &gt;{ <span class="hljs-keyword">constructor</span>( // Define parameters
name, volume, color, pocketNum, strapLengthL, strapLengthR, lidOpen ) {
<span class="hljs-comment">// Define properties:</span>
<span class="hljs-keyword">this</span>.name = name
<span class="hljs-keyword">this</span>.volume = volume
<span class="hljs-keyword">this</span>.color = color
<span class="hljs-keyword">this</span>.pocketNum = pocketNum
<span class="hljs-keyword">this</span>.strapLength = {
<span class="hljs-attr">left</span>: strapLengthL,
<span class="hljs-attr">right</span>: strapLengthR, }
<span class="hljs-keyword">this</span>.lidOpen = lidOpen }
<span class="hljs-comment">// Add methods like normal functions:</span>
toggleLid(lidStatus) { <span class="hljs-keyword">this</span>.lidOpen =
lidStatus } newStrapLength(lengthLeft, lengthRight) {
<span class="hljs-keyword">this</span>.strapLength.left = lengthLeft
<span class="hljs-keyword">this</span>.strapLength.right = lengthRight } }
<span class="hljs-keyword">export</span>
<span class="hljs-keyword">default</span> Backpack </span></span></div>
<!-- CODE -->
<h4 id="how-to-use-a-class">HOW TO USE A CLASS</h4>
<ul>
 	<li>Create a new variable like this,</li>
</ul>

<div class="code-filename">script.js</div>

<!-- CODE -->
<code></code>
<div><span class="hljs-comment">/** * Create a Backpack object. */</span>
<span class="hljs-keyword">import</span> Backpack
<span class="hljs-keyword">from</span>
<span class="hljs-string">"./Backpack.js"</span>
<span class="hljs-keyword">const</span> everydayPack =
<span class="hljs-keyword">new</span> Backpack(
<span class="hljs-string">"Everyday Backpack"</span>,
<span class="hljs-number">30</span>,
<span class="hljs-string">"grey"</span>,
<span class="hljs-number">15</span>, <span class="hljs-number">26</span>,
<span class="hljs-number">26</span>,
<span class="hljs-literal">false</span> )
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"The everydayPack object:"</span>, everydayPack)
<span class="hljs-comment">// obj</span>
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"The pocketNum value:"</span>,
everydayPack.pocketNum) <span class="hljs-comment">// 15</span></div>
<!-- CODE -->
<ul>
 	<li>#GOTCHA: JavaScript modules must be run in server context or you will
get CORS error like this,</li>
</ul>
<aside class="notice error">Access to script at 'file:///Z:/sb/junk.js' from origin 'null' has been
blocked by CORS policy: Cross origin requests are only supported for
protocol schemes: http, data, isolated-app, chrome-extension, chrome,
https, chrome-untrusted.</aside>
<ul>
 	<li>Can you use <strong>Five Server</strong> VSCode extension in 2022</li>
 	<li>Finally, index.htm is the final piece,</li>
</ul>

<div class="code-filename">index.html</div>

<!-- CODE -->
<code></code>
<div>&lt;!DOCTYPE html&gt;
<span class="xml">
<span class="hljs-tag">&lt; <span class="hljs-name">html</span>
<span class="hljs-attr">lang</span>=
<span class="hljs-string">"en"</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">head</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">meta</span>
<span class="hljs-attr">charset</span>=
<span class="hljs-string">"UTF-8"</span> /&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">meta</span>
<span class="hljs-attr">http-equiv</span>=
<span class="hljs-string">"X-UA-Compatible"</span>
<span class="hljs-attr">content</span>=
<span class="hljs-string">"IE=edge"</span> /&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">meta</span>
<span class="hljs-attr">name</span>=
<span class="hljs-string">"viewport"</span>
<span class="hljs-attr">content</span>=
<span class="hljs-string">"width=device-width, initial-scale=1.0"&lt;/span &gt;
/&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">title</span>&gt; &lt;/span &gt;Classes
<span class="hljs-tag">&lt;/ <span class="hljs-name">title</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">script</span>
<span class="hljs-attr">type</span>=
<span class="hljs-string">"module"</span>
<span class="hljs-attr">src</span>=
<span class="hljs-string">"Backpack.js"</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">script</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">script</span>
<span class="hljs-attr">type</span>=
<span class="hljs-string">"module"</span>
<span class="hljs-attr">src</span>=
<span class="hljs-string">"script.js"</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">script</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">head</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">body</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">body</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">html</span>&gt;
</span>
</span> </span></span></div>
<!-- CODE -->
<ul>
 	<li>All imports need to happen at the top of the main js file</li>
 	<li>Classes must be declared (via import) before they are used</li>
</ul>
<h3 id="310-object-constructors">3.10 Object constructors</h3>
EX: 03_11
<ul>
 	<li>Shorter lesser advanced alternative to class: object constructor
function</li>
 	<li>function keyword instead of class</li>
 	<li>no explicit "constructor" keywords</li>
 	<li>methods live inside the constructor area and use "this"</li>
</ul>

<div class="code-filename">script.js</div>

( <em>with object constructor</em>)

<!-- CODE -->
<code></code>
<div><span class="hljs-comment">/* Object constructor example */</span>
<span class="hljs-function">
<span class="hljs-keyword">function</span>
<span class="hljs-title">Backpack</span>(
<span class="hljs-params">
name, volume, color, pocketNum, strapLengthL, strapLengthR, lidOpen &lt;/span &gt;) &lt;/span &gt;{ <span class="hljs-keyword">this</span>.name = name
<span class="hljs-keyword">this</span>.volume = volume
<span class="hljs-keyword">this</span>.color = color
<span class="hljs-keyword">this</span>.pocketNum = pocketNum
<span class="hljs-keyword">this</span>.strapLength = {
<span class="hljs-attr">left</span>: strapLengthL,
<span class="hljs-attr">right</span>: strapLengthR, }
<span class="hljs-keyword">this</span>.toggleLid =
<span class="hljs-function">
<span class="hljs-keyword">function</span> (
<span class="hljs-params">lidStatus</span>) &lt;/span &gt;{ <span class="hljs-keyword">this</span>.lidOpen = lidStatus }
<span class="hljs-keyword">this</span>.newStrapLength =
<span class="hljs-function">
<span class="hljs-keyword">function</span> (
<span class="hljs-params">lengthLeft, lengthRight</span>) &lt;/span &gt;{ <span class="hljs-keyword">this</span>.strapLength.left = lengthLeft
<span class="hljs-keyword">this</span>.strapLength.right = lengthRight } }
<span class="hljs-keyword">const</span> everydayPack =
<span class="hljs-keyword">new</span> Backpack(
<span class="hljs-string">"Everyday Backpack"</span>,
<span class="hljs-number">30</span>,
<span class="hljs-string">"grey"</span>,
<span class="hljs-number">15</span>, <span class="hljs-number">26</span>,
<span class="hljs-number">26</span>,
<span class="hljs-literal">false</span> )
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"The everydayPack object:"</span>, everydayPack)
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"The pocketNum value:"</span>,
everydayPack.pocketNum) </span></span></span></span></div>
<!-- CODE -->
<ul>
 	<li>Differences between class and object constructor: we can extend classes,
add new features, and class is now preferred</li>
 	<li>#BESTPRACTICE: Use classes, avoid object constructors</li>
 	<li>#GOTCHA: In old code and tutorials you will still see a lot of object
constructors because that's all JS developers used to have</li>
 	<li>#ROT: Use a class unless you are required to use an object constructor
function because classes give you more capability</li>
</ul>
<h3 id="311-practice-build-a-new-object-with-a-constructor">3.11 Practice: Build a new object with a constructor</h3>
<ul>
 	<li>Classes feature heavily in modern JS frameworks</li>
 	<li>Getting comfortable with writing and using classes will be advantageous
working with advanced JS and applications</li>
</ul>
EX: Practice &gt; 03_12
<h4 id="practice">Practice</h4>
<ul>
 	<li>Use Backpack class as reference.</li>
 	<li>Create new classes based on one or more of the objects you created in
the previous lessons.</li>
 	<li>Create separate files for each class and import them as modules to have
clear <strong>separation of concerns</strong></li>
</ul>
Easiest approach:
<ul>
 	<li>Start with a fully built object then migrate classes and properties over
one-by-one</li>
</ul>
<h4 id="my-practice-results">My Practice Results:</h4>
<h3 id="version-1">Version 1</h3>

<div class="code-filename">index.htm</div>
<!-- CODE -->
<code></code>
<div><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">html</span>
<span class="hljs-attr">lang</span>=
<span class="hljs-string">"en"</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">head</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">meta</span>
<span class="hljs-attr">charset</span>=
<span class="hljs-string">"UTF-8"</span> /&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">meta</span>
<span class="hljs-attr">name</span>=
<span class="hljs-string">"viewport"</span>
<span class="hljs-attr">content</span>=
<span class="hljs-string">"width=device-width, initial-scale=1.0"</span>
/&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">title</span>&gt; &lt;/span &gt;Practice: Making classes and objects
<span class="hljs-tag">&lt;/ <span class="hljs-name">title</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">script</span>
<span class="hljs-attr">type</span>=
<span class="hljs-string">"module"</span>
<span class="hljs-attr">src</span>=
<span class="hljs-string">"Backpack.js"</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">script</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">script</span>
<span class="hljs-attr">type</span>=
<span class="hljs-string">"module"</span>
<span class="hljs-attr">src</span>=
<span class="hljs-string">"Rag.js"</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">script</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">script</span>
<span class="hljs-attr">type</span>=
<span class="hljs-string">"module"</span>
<span class="hljs-attr">src</span>=
<span class="hljs-string">"script.js"</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">script</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">head</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">body</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">body</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">html</span>&gt;
</span> </span></div>
<!-- CODE -->

<div class="code-filename">Rag.js</div>

<!-- CODE -->
<code></code>
<div><span class="hljs-comment">/** * Rag.js * * Programmer: Eric Hepperle * Date: 2022-11-23 * *
Purpose: Class to represent rags for OOP in JavaScript */&lt;/span &gt;
<span class="hljs-class">
<span class="hljs-keyword">class</span>
<span class="hljs-title">Rag</span> &lt;/span &gt;{ <span class="hljs-keyword">constructor</span>( name, color, height,
width ) { <span class="hljs-keyword">this</span>.name = name
<span class="hljs-keyword">this</span>.color = color
<span class="hljs-keyword">this</span>.height = height
<span class="hljs-keyword">this</span>.width = width } setName(newName) {
<span class="hljs-keyword">this</span>.name = newName } setColor(newColor)
{ <span class="hljs-keyword">this</span>.color = newColor } logRagInfo() {
<span class="hljs-keyword">let</span> styles = [
<span class="hljs-string">`font-weight: bold`</span>,
<span class="hljs-string">`padding: 1em`</span>,
<span class="hljs-string">`color:
<span class="hljs-subst">${ <span class="hljs-keyword">this</span>.color} &lt;/span &gt;` &lt;/span &gt;, ] <span class="hljs-keyword">let</span> style = styles.join(
<span class="hljs-string">'; '</span>) +
<span class="hljs-string">';'</span>
<span class="hljs-keyword">if</span> (
<span class="hljs-keyword">this</span>.color ===
<span class="hljs-string">'yellow'</span>) { style +=
<span class="hljs-string">`background: #777;`</span> }
<span class="hljs-keyword">else</span> { style +=
<span class="hljs-string">`background: #EEE; `</span> }
<span class="hljs-keyword">let</span> ragInfo =
<span class="hljs-string">`\t* Color:
<span class="hljs-subst">${ <span class="hljs-keyword">this</span>.color}
</span>
\n`
</span>
+
<span class="hljs-string">`\t* Size: W:
<span class="hljs-subst">${ <span class="hljs-keyword">this</span>.width} &lt;/span &gt;, H:
<span class="hljs-subst">${ <span class="hljs-keyword">this</span>.height} &lt;/span &gt;`
</span>
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"%cRAG INFO for: %s"</span>, style,
<span class="hljs-keyword">this</span>.name ) } }
<span class="hljs-keyword">export</span>
<span class="hljs-keyword">default</span> Rag </span></span></span></span></span></span></div>
<!-- CODE -->

<div class="code-filename">script.js</div>

<!-- CODE -->
<code></code>
<div><span class="hljs-comment">/** * Practice: Making classes and objects * * - Find a type of object
you have more than one of in your house (eg. clothing, writing tools,
etc). * - Create a class describing this object type - its properties
and methods. * - Create several objects using the class. * - Test the
objecs by calling their properties and using their methods in the
console. */&lt;/span &gt;
<span class="hljs-comment">/* Eric Hepperle 2022-11-23 */</span>
<span class="hljs-keyword">import</span> Rag
<span class="hljs-keyword">from</span>
<span class="hljs-string">'./Rag.js'</span>
<span class="hljs-comment">// const rag = {</span>
<span class="hljs-comment">// color: 'yellow',</span>
<span class="hljs-comment">// height: 8,</span>
<span class="hljs-comment">// width: 8,</span>
<span class="hljs-comment">// }</span>
<span class="hljs-keyword">const</span> rag1 =
<span class="hljs-keyword">new</span> Rag(
<span class="hljs-string">"rag1 - The First!"</span>,
<span class="hljs-string">"Red"</span>,
<span class="hljs-number">8</span>, <span class="hljs-number">8</span>, )
<span class="hljs-keyword">const</span> rag2 =
<span class="hljs-keyword">new</span> Rag(
<span class="hljs-string">"Rag2"</span>,
<span class="hljs-string">"blue"</span>,
<span class="hljs-number">32</span>, <span class="hljs-number">32</span>,
) <span class="hljs-keyword">const</span> rag3 =
<span class="hljs-keyword">new</span> Rag(
<span class="hljs-string">"Rag3"</span>,
<span class="hljs-string">'yellow'</span>,
<span class="hljs-number">9</span>, <span class="hljs-number">14</span>, )
<span class="hljs-keyword">const</span> rags = [rag1, rag2, rag3]
rags.forEach(
<span class="hljs-function">
<span class="hljs-params">rag</span> =&gt;
</span>
{ rag.logRagInfo() }) </span></div>
<!-- CODE -->

The cool thing about this practice was creating the
<strong>logRagInfo</strong> method. This method has the following features:
<ul>
 	<li>declares an array of CSS styles <strong>styles</strong></li>
 	<li>joins styles in a string</li>
 	<li>uses <strong>style</strong> string to format console.log() with '%c%s'</li>
 	<li>Logs out instance info / rag properties in the rag.color</li>
 	<li>Uses conditional to use a darker background if the color is yellow</li>
</ul>

<hr />

<h3 id="version-2">Version 2</h3>

<div class="code-filename">index.htm</div>

<!-- CODE -->
<code></code>
<div><span class="hljs-meta">&lt;!DOCTYPE <span class="hljs-meta-keyword">html</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">html</span>
<span class="hljs-attr">lang</span>=
<span class="hljs-string">"en"</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">head</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">meta</span>
<span class="hljs-attr">charset</span>=
<span class="hljs-string">"UTF-8"</span> /&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">meta</span>
<span class="hljs-attr">name</span>=
<span class="hljs-string">"viewport"</span>
<span class="hljs-attr">content</span>=
<span class="hljs-string">"width=device-width, initial-scale=1.0"</span>
/&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">title</span>&gt; &lt;/span &gt;Practice: Making classes and objects
<span class="hljs-tag">&lt;/ <span class="hljs-name">title</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">script</span>
<span class="hljs-attr">type</span>=
<span class="hljs-string">"module"</span>
<span class="hljs-attr">src</span>=
<span class="hljs-string">"Backpack.js"</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">script</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">script</span>
<span class="hljs-attr">type</span>=
<span class="hljs-string">"module"</span>
<span class="hljs-attr">src</span>=
<span class="hljs-string">"Rag.js"</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">script</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">script</span>
<span class="hljs-attr">type</span>=
<span class="hljs-string">"module"</span>
<span class="hljs-attr">src</span>=
<span class="hljs-string">"Basket.js"</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">script</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">script</span>
<span class="hljs-attr">type</span>=
<span class="hljs-string">"module"</span>
<span class="hljs-attr">src</span>=
<span class="hljs-string">"script.js"</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">script</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">head</span>&gt;
</span>
<span class="hljs-tag">&lt; <span class="hljs-name">body</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">body</span>&gt;
</span>
<span class="hljs-tag">&lt;/ <span class="hljs-name">html</span>&gt;
</span> </span></div>
<!-- CODE -->

<div class="code-filename">Basket.js</div>

Basket is class is made to contain other class
objects.

<!-- CODE -->
<code></code>
<div><span class="hljs-comment">/** * Basket.js * * Programmer: Eric Hepperle * Date 2022-11-23 * *
Purpose: Basket is a class that can hold other objects */&lt;/span &gt;
<span class="hljs-class">
<span class="hljs-keyword">class</span>
<span class="hljs-title">Basket</span> &lt;/span &gt;{ <span class="hljs-keyword">constructor</span>( contents, units, length,
width, depth, area, volume, weight ) {
<span class="hljs-keyword">this</span>.contents = contents
<span class="hljs-keyword">this</span>.units = units
<span class="hljs-keyword">this</span>.length = length
<span class="hljs-keyword">this</span>.width = width
<span class="hljs-keyword">this</span>.depth = depth
<span class="hljs-keyword">this</span>.area = area
<span class="hljs-keyword">this</span>.volume = volume
<span class="hljs-keyword">this</span>.weight = weight }
setContents(newContents) { <span class="hljs-keyword">this</span>.contents
= newContents } addContents(newContents) {
<span class="hljs-keyword">this</span>.contents.push(newContents) }
calcArea() { <span class="hljs-keyword">let</span> area =
<span class="hljs-keyword">this</span>.width *
<span class="hljs-keyword">this</span>.length
<span class="hljs-keyword">return</span>
<span class="hljs-string">` <span class="hljs-subst">${area}</span>
<span class="hljs-subst">${ <span class="hljs-keyword">this</span>.units} &lt;/span &gt;`
</span>
} getURL() { <span class="hljs-keyword">return</span>
<span class="hljs-built_in">window</span>.document.URL } getContentNames()
{ <span class="hljs-keyword">let</span> out =
<span class="hljs-string">''</span>
<span class="hljs-keyword">this</span>.contents.forEach(
<span class="hljs-function">
<span class="hljs-params">item</span> =&gt;
</span>
{ out += item.name + <span class="hljs-string">', '</span> })
<span class="hljs-keyword">return</span> out } }
<span class="hljs-keyword">export</span>
<span class="hljs-keyword">default</span> Basket </span></span></span></div>
<!-- CODE -->

<div class="code-filename">script.js</div>

<!-- CODE -->
<code></code>
<div><span class="hljs-comment">/** * Practice: Making classes and objects * * - Find a type of object
you have more than one of in your house (eg. clothing, writing tools,
etc). * - Create a class describing this object type - its properties
and methods. * - Create several objects using the class. * - Test the
objecs by calling their properties and using their methods in the
console. */&lt;/span &gt;
<span class="hljs-comment">/* Eric Hepperle 2022-11-23 */</span>
<span class="hljs-keyword">import</span> Rag
<span class="hljs-keyword">from</span>
<span class="hljs-string">'./Rag.js'</span>
<span class="hljs-keyword">import</span> Basket
<span class="hljs-keyword">from</span>
<span class="hljs-string">'./Basket.js'</span>
<span class="hljs-keyword">const</span> rag1 =
<span class="hljs-keyword">new</span> Rag(
<span class="hljs-string">"rag1 - The First!"</span>,
<span class="hljs-string">"Red"</span>,
<span class="hljs-number">8</span>, <span class="hljs-number">8</span>, )
<span class="hljs-keyword">const</span> rag2 =
<span class="hljs-keyword">new</span> Rag(
<span class="hljs-string">"Rag2"</span>,
<span class="hljs-string">"blue"</span>,
<span class="hljs-number">32</span>, <span class="hljs-number">32</span>,
) <span class="hljs-keyword">const</span> rag3 =
<span class="hljs-keyword">new</span> Rag(
<span class="hljs-string">"Rag3"</span>,
<span class="hljs-string">'yellow'</span>,
<span class="hljs-number">9</span>, <span class="hljs-number">14</span>, )
<span class="hljs-keyword">const</span> rags = [rag1, rag2, rag3]
rags.forEach(
<span class="hljs-function">
<span class="hljs-params">rag</span> =&gt;
</span>
{ rag.logRagInfo() }) <span class="hljs-keyword">const</span> basket1 =
<span class="hljs-keyword">new</span> Basket( [
<span class="hljs-string">'some stuff'</span>],
<span class="hljs-string">'cm'</span>,
<span class="hljs-number">17</span>, <span class="hljs-number">13</span>,
<span class="hljs-number">9</span>, <span class="hljs-string">''</span>,
<span class="hljs-string">''</span>, <span class="hljs-string">''</span>,
) <span class="hljs-comment">// console.log("basket1:", basket1)</span>
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"basket1.contents START:"</span>,
basket1.contents)
<span class="hljs-comment">// ['some stuff]</span>
basket1.contents.push(...rags)
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"basket1.contents:"</span>, basket1.contents)
<span class="hljs-comment">// ['some stuff', Rag, Rag, Rag]</span>
basket1.setContents(rags) <span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"basket1.contents:"</span>, basket1.contents)
<span class="hljs-comment">// [Rag, Rag, Rag]</span>
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"basket1 area:"</span>, basket1.calcArea())
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"URL:"</span>, basket1.getURL())
<span class="hljs-keyword">const</span> basket2 =
<span class="hljs-keyword">new</span> Basket( [rag1, rag3, {
<span class="hljs-attr">name</span>:
<span class="hljs-string">'apple'</span>,
<span class="hljs-attr">type</span>:
<span class="hljs-string">'granny smith'</span>,
<span class="hljs-attr">rating</span>:
<span class="hljs-string">'yum!'</span> }] )
<span class="hljs-comment">// basket2: 2 rags and an apple</span>
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"basket2 START:"</span>, basket2)
basket2.addContents({ <span class="hljs-attr">name</span>:
<span class="hljs-string">'Chocolate Bar'</span>,
<span class="hljs-attr">brand</span>:
<span class="hljs-string">"Hershey"</span>,
<span class="hljs-attr">color</span>:
<span class="hljs-string">"brown"</span> })
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"basket2:"</span>)
<span class="hljs-comment">// console.log(basket2.contents.toString())&lt;/span &gt;
<span class="hljs-keyword">let</span> myVal = basket2.contents
<span class="hljs-built_in">console</span>.log({ myVal })
<span class="hljs-built_in">console</span>.log(
<span class="hljs-string">"Content items names:"</span>,
basket2.getContentNames())
<span class="hljs-comment">/* Here we create 3 rag objects and 2 baskets, each with different
items. Each basket has a "contents" property which is and array can
contain any type. The basket class has several methods including: -
setContents: replaces the contents array completely - addContents:
pushes objects on the the contents array - calArea: calculates the area
from length and width - getURL: returns the url is in the address bar -
getContentNames: prints a list of names of every item in contents array
*/&lt;/span &gt; </span></span></span></div>
<!-- CODE -->
<h2 id="bookmark" class="error">CONTINUE HERE</h2>
<h3 id="312-global-objects">3.12 Global objects</h3>
<h1 id="resources--reference">RESOURCES &amp; REFERENCE</h1>
<ul>
 	<li>https://www.linkedin.com/learning/instructors/nigel-french)</li>
</ul>
<em>(To Be Continued ...)</em>
<h3 class="error">NEXT: 2.02 Adding page numbers and running heads</h3>
</div>
<!-- /ehw-body -->

</div>
<!-- /ehw-wrapper -->


