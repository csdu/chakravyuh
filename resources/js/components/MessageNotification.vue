<template></template>

<script>
export default {
	props: {
		user_id: { required: true }
	},
	methods: {
		onNotificationReceived(notification) {
			flash(notification.message, "info", true);
		}
	},
	created() {
		Echo.private(`participants.${this.user_id}`).notification(
			this.onNotificationReceived
		);
	}
};
</script>
