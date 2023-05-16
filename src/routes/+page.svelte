<h1>Min nettside</h1>
<p>Visit <a href="https://kit.svelte.dev">kit.svelte.dev</a> to read the documentation</p>

<script>
	let count = 0;

	$: if (count >= 10) {
		alert(`count is dangerously high!`);
		count = 9;
	}

	function handleClick() {
		count += 1;
	}
</script>

<button on:click={handleClick}>
	Clicked {count} {count === 1 ? 'time' : 'times'}
</button>

<style>
button {
    text-align: center;
    display: flex;

}
h1 {
    font-family: 'Courier New', Courier, monospace;
    text-align: center;
}
:global(body) {
    background-image: url("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.redbubble.com%2Fi%2Fgreeting-card%2Fchairman-lebron-mao-by-ahmadsingh69%2F48862133.5MT14&psig=AOvVaw0AqrJSeGg7HmO2FPl8M9Na&ust=1684328338573000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMC-0JTy-f4CFQAAAAAdAAAAABAE");
    background-position: 0%;
}
</style>
