<Header />
<script>
// @ts-nocheck

    //chatGPT API request kode
    import Header from "../../components/Header.svelte";
    import Footer from "../../components/Footer.svelte";
    import { onMount } from 'svelte';
    import { writable } from 'svelte/store';
    import axios from 'axios';


  const apiKey = '109c8ced7ca475d5d928bb833cd63e5e6b8c6c0c';
  const apiUrl = 'https://wger.de/api/v2/exercise/';

  const responseData = writable(null);
  let tall1 = 10
  let tall2 = 20
  let tall3 = tall1+tall2
  if(tall3<20){
    console.log("tall3 er mindre enn 20")
    
  }
  else {
    console.log("tall3 er større enn 20")
  }
  onMount(async () => {
    try {
      const response = await axios.get(apiUrl, {
        headers: {
          Authorization: `Token ${apiKey}`
        }
      });
      responseData.set(response.data);
    } catch (error) {
      console.error(error);
    }
  });
    </script>
    <br>
    <br>
    <h1>What is strength training?</h1>
    <br>
    <br>
    <img src="/man-lifting-main.jpg" alt="man-lifting">
    <p>If you knew that a certain type of exercise could benefit your heart, improve balance, strengthen bones and muscle, and help you lose or maintain weight, wouldn’t you want to get started? Well, studies show that strength training can provide all those benefits and more.

        Strength training — also known as weight or resistance training — is physical activity designed to improve muscular strength and fitness by exercising a specific muscle or muscle group against external resistance, including free weights, weight machines, or your own body weight, according to the National Academy of Sports Medicine (NASM).
        
        “The basic principle is to apply a load and overload the muscle so it needs to adapt and get stronger,” explains Neal Pire, CSCS, an ACSM-certified exercise physiologist and executive director of the Greater New York ACSM regional chapter.
        
        And what’s important for everyone to know is that strength training is not just for bodybuilders and professional athletes. “Strength training is critical, not just for looking good and being strong, but for preventing the diseases of aging,” says Gabrielle Lyon, DO, a functional medicine practitioner in New York City and the founder of the Institute for Muscle-Centric Medicine, a functional medicine practice.
        
        Regular strength or resistance training is good for people of all ages and fitness levels to help prevent the natural loss of lean muscle mass that comes with aging (the medical term for this loss is sarcopenia), per the Cleveland Clinic. It can also benefit people with chronic health conditions, like obesity, diabetes, or a heart condition, according to a research review published in 2019.
     </p>
     <h1>if you are looking for some ways you can do your exercises here are some examples:</h1>
     <br>
     <br>
    {#if $responseData}
    <h1>Exercises</h1>
    <br>
    <ul>
      {#each $responseData.results as exercise}
        <li>{exercise.name}</li>
      {/each}
    </ul>
  {:else}
    <p>Loading...</p>
  {/if}

  <Footer />

  <style>
    p {
        font-family: 'Futura';
        font-size: xx-large;
        line-height: 70px;
    }
    img {
        border-radius: 10px;
    }
  
    li {
        font-family: 'Futura';
        font-size: larger;
        flex: start;
    }

  </style>
