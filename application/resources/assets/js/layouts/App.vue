<template>
	<transition name="top-fade">
		<router-view/>
	</transition>
</template>

<style>
	.top-fade-enter-active, .fade-leave-active {
		transition: opacity .5s
	}
	.top-fade-enter, .fade-leave-to {
		opacity: 0
	}
	.top-fade-leave-active {
		position: absolute;
	}
</style>