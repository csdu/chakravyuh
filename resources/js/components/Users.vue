<template>
	<div>
		<table class="w-full border-collapse">
			<thead>
				<tr class="bg-yellow-500">
					<th class="text-xs uppercase font-light text-left pl-6 py-2">ID</th>
					<th class="text-xs uppercase font-light text-left px-4 py-2">Name</th>
					<th class="text-xs uppercase font-light text-left px-4 py-2">Email</th>
					<th class="text-xs uppercase font-light text-center px-4 py-2">Level</th>
					<th class="text-xs uppercase font-light text-center pr-6 py-2">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr v-if="users.length <= 0" class="border-t hover:bg-yellow-200">
					<td class="table-fit text-left pl-6 py-2 text-sm">No Participants yet.</td>
				</tr>

				<tr class="border-t hover:bg-yellow-200" v-for="user in users" :key="user.id">
					<td class="table-fit text-left pl-6 py-2 text-xs">{{ user.id }}</td>
					<td class="table-fit text-left capitalize px-4 py-2">
						<span class>{{ user.name }}</span>
					</td>
					<td class="table-fit text-left px-4 py-2">
						<span class>{{ user.email }}</span>
					</td>
					<td class="text-center px-4 py-2">
						<span class="px-2 py-1 bg-yellow-700 text-white rounded-full">{{ user.level }}</span>
					</td>
					<td class="table-fit text-center pr-6 py-2">
						<a class="bg-red-500 hover:bg-red-700 text-white py-2 px-3 rounded">Disqualify</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
export default {
	props: {
		token: { required: true }
	},
	data() {
		return {
			users: []
		};
	},
	methods: {
		getUsers() {
			window.axios
				.get("/api/users", {
					params: {
						api_token: this.token
					}
				})
				.then(res => {
					this.users = res.data;
				})
				.catch(err => {
					this.users = [];
				});
		}
	},
	created() {
		this.getUsers();
		setInterval(() => {
			this.getUsers();
		}, 3000);
	}
};
</script>