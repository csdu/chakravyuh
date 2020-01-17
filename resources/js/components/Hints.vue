<template>
	<ul class="px-2">
		<li v-if="!hints.length" class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2">No Hints Available</li>
		<li
			class="md:mb-2 mb-1 p-2 shadow-md bg-black-op2"
			v-for="hint in hints"
			:key="hint.id"
		>{{ hint.text }}</li>
	</ul>
</template>

<script>
export default {
	props: {
		token: { required: true },
		question_id: { required: true }
	},
	data() {
		return {
			hints: []
		};
	},
	methods: {
		getQuestionHints() {
			window.axios
				.get("api/question/" + this.question_id + "/hints/", {
					params: {
						api_token: this.token
					}
				})
				.then(res => {
					this.hints = res.data;
				})
				.catch(err => {
					this.hints = [];
				});
		}
	},
	created() {
		this.getQuestionHints();
		setInterval(() => {
			this.getQuestionHints();
		}, 3000);
	}
};
</script>