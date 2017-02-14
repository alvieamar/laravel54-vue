<h2>PR: L54V001-Example_Vue</h2>
Create New App Laravel54-vue
Install nodejs with npm (help build front-end[view-components])
npm run watch -- (watch build assets[builds using webpack])

Try to load example.vue component
- create route chat
- create chat view
- inlude app.css & app.js

Encountered error: 
Uncaught TypeError: Cannot read property 'csrfToken' of undefined(…)
solution:
<pre>
       window.Laravel = <?php echo json_encode([
           'csrfToken' => csrf_token(),
       ]); ?>
<pre>
