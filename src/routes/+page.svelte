
<script>
// Import the necessary libraries
import { onMount } from 'svelte';
// shy header import
 import Header from './Header.svelte';
 import Footer from './Footer.svelte';


// Declare a variable to store the fetched data
let exercises = [];
// Fetch data from the ExerciseAPI3
onMount(async () => {
  const apiKey = '9a9af9e7a1msh02f136f7f0af882p151f13jsncb71b401ede3'; 
  const url = 'https://exerciseapi.p.rapidapi.com/exercises'; // API endpoint

  try {
    const response = await fetch(url, {
      headers: {
        'X-RapidAPI-Key': '9a9af9e7a1msh02f136f7f0af882p151f13jsncb71b401ede3',

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

<br>
<br>
<br>
<br>
<br>
<h1>Hva vil du lære om?</h1>
<div class="container">
  <div class="box">
    <slot>
      <img src="Blog-Deadlifting-Male_1800x672_1200x672_acf_cropped.jpg" alt="styrke" height="230px">
      <div class="overlay">Styrketrening</div>
    </slot>
  </div>
  <div class="box">
    <slot>
      <img src="/salad.jpeg" alt="diett" height="230px">
      <div class="overlay">Helse og næring</div>
    </slot>
  </div>
  <div class="box">
    <slot>
      <img src="/runnin.jpeg" alt="cardio" height="230px">
      <div class="overlay">Cardio</div>
    </slot>
  </div>
</div>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos culpa eum, ratione voluptas corrupti molestias aperiam dolorum esse labore iusto ad rem animi velit. Asperiores placeat laborum recusandae aliquam ex.</p>
<Footer />

<style lang="scss">
.box {
	display: flex;
	align-items: center;
	justify-content: row;
	justify-content: center;
	border: 1px solid grey;
	border-radius: 25px;
	box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
	padding: 1em;
	margin: 0 0 1em 0;
	font-family: 'Futura';
	background-color: #5ebfb9;
  position: relative;

}
.container {
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	
}
.overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(255, 255, 255, 0.8);
  padding: 10px;
  text-align: center;
  font-size: 18px;
  font-weight: bold;
  color: #000;
  z-index: 2;
}



h1 {
    font-family: 'Futura';
    text-align: center;
}

:global(body){
	text-align: center;
	background-color: #bee9ea;
  font-family: 'Futura';
}



</style>
