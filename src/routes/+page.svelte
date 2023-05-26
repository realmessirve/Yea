
<script>
// header import
 import Header from '../components/Header.svelte';
 import Footer from '../components/Footer.svelte';
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
      <div class="overlay"><a href="./styrketrening">Styrketrening</a></div>
    </slot>
  </div>
  <div class="box">
    <slot>
      <img src="/salad.jpeg" alt="diett" height="230px">
      <div class="overlay"><a href="./helseognaering">helse og næring</a></div>
    </slot>
  </div>
  <div class="box">
    <slot>
      <img src="/runnin.jpeg" alt="cardio" height="230px">
      <div class="overlay"><a href="./cardio">Cardio</a></div>
    </slot>
  </div>
</div>
<p>Denne nettsiden tilbyr informasjon og debunker falsk fakta. Ingen betalinger heller. Les i vei!</p>
<Footer />

<style lang="scss">
.box {
	display: flex;
	align-items: center;
	justify-content: row;
	justify-content: center;
	border-radius: 25px;
	box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
	padding: 1em;
	margin: 0 0 1em 0;
	font-family: 'Futura';
	background-color: #5ebfb9;
  position: relative;
  overflow: hidden;

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
  transition: opacity 0.3s ease, transform 0.3s ease;
}
.box:hover img { 
  transform: scale(1.04);
}
.box:hover .overlay {
  transform: translate(-50%, -50%) scale(1.04);
}
a {
  color: #5ebfb9;
  
}

:global(body){
	text-align: center;
	background-color: #dbf0f0;
  font-family: 'Futura';
}

img {
  border-radius: 10px;
  transition: opacity 0.7s ease;
  transition: transform 0.7s ease;
}

img:hover {
  opacity: 0.5;
  transform: scale(1.04);
  
}
p {
  align-items: center;
  display: flex;
  text-align: center; 
  font-size: x-large;
  line-height: 60px;
}

</style>
