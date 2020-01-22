<template>
	<div
		class="fixed flex flex-col inset-x-0 top-0 mt-4 items-end z-50 pointer-events-none container mx-auto"
	>
		<transition-group
			name="fade"
			enter-active-class="fadeIn"
			leave-active-class="fadeOut"
			mode="in-out"
		>
			<div
				class="border rounded mb-2 p-3 max-w-5/6 md:max-w-1/3"
				:class="classes[message.level]"
				v-for="message in messages"
				:key="message.id"
			>{{ message.message }}</div>
		</transition-group>
	</div>
</template>

<script>
export default {
	props: {
		"data-messages": {
			default: []
		}
	},
	data() {
		return {
			messages: [],
			classes: {
				success: "bg-green-300 border-green-500 text-green-700",
				danger: "bg-red-300 border-red-500 text-red-700",
				info: "bg-blue-300 border-blue-500 text-blue-700",
				warning: "bg-yellow-300 border-yellow-700 text-yellow-700"
			}
		};
	},
	methods: {
		clear() {
			for (let i = 0; i < this.messages.length; i++) {
				setTimeout(() => {
					this.messages.splice(0, 1);
				}, i * 500);
			}
		},
		flash(message) {
			this.messages.push(message);
			setTimeout(() => this.clear(), 3000);
		},
		schema() {
			return ["id", "message", "level", "important"];
		}
	},
	mounted() {
		this.dataMessages.forEach(message => this.messages.push(message));
		setTimeout(() => this.clear(), 3000);

		window.Events.$on("flash", message => {
			this.flash(message);
		});
	}
};
</script>
<style scoped>
.fadeIn,
.fadeOut {
	animation: fade;
	animation-duration: 0.5s;
}
.fadeOut {
	animation-direction: reverse;
}
@keyframes fade {
	0% {
		transform: translateY(200%);
		opacity: 0;
	}
	100% {
		transform: translateY(0);
		opacity: 1;
	}
}
</style>


