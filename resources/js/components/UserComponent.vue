<template>
    <div class="card">
        <div class="card-header">{{ userDataJson.name }}</div>

        <div class="card-body">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">User Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ userDataJson.email }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        userDataJson: {
            type: Object,
            required: true
        },
    },
}
</script>

<style scoped>
    table {
        width: 30%;
    }
</style>

