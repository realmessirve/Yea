
<script>
// Import the necessary libraries
import { onMount } from 'svelte';
// shy header import
import Header from '$lib/components/Header.svelte';


// Declare a variable to store the fetched data
let exercises = [];
// Fetch data from the ExerciseAPI3
onMount(async () => {
  const apiKey = 'YOUR_API_KEY'; 
  const url = 'https://exerciseapi.p.rapidapi.com/exercises'; // API endpoint

  try {
    const response = await fetch(url, {
      headers: {
        'X-RapidAPI-Key': apiKey
      }
    });

    if (response.ok) {
      exercises = await response.json();
    } else {
      console.error('Error:', response.status);
    }
  } catch (error) {
    console.error('Error:', error);
  }
});
</script>

<!-- selve koden--> 
<Header />
<main class="container" />
 
<h1>GetWell</h1>
<br>
<br>
<br>
<div class="container">
<div class="box">
	<slot>Placeholder</slot>
</div>
<div class="box">
	<slot>Placeholder</slot>
</div>
<div class="box">
	<slot>Placeholder</slot>
</div>
</div>
<div class="footer">
	<p>lebroncabron</p>
</div>
<style>
.box {
	display: flex;
	align-items: center;
	justify-content: row;
	justify-content: center;
	width: 300px;
	border: 1px solid #aaa;
	border-radius: 25px;
	box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
	padding: 1em;
	margin: 0 0 1em 0;
	font-family: 'Futura';
	background-color: #aaa;

}
.container {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	
}

h1 {
    font-family: 'Futura';
    text-align: center;
}
:global(body){
	text-align: center;
	background-color: #C8E1E2;
	

}

.footer {
  width: 100%;
  height: 8rem;
  background-color: #83dfa2;
  padding: 20px;
  border: 1px solid #ccc;
  border-top-left-radius: 5px;
  border-top-right-radius: 20px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 15px;
  color: rgb(38, 37, 37);
  font-family:'Futura';
  display: flex;
  text-align: center;
  justify-content: center;
  align-items: center;

}

</style>
