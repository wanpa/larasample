<template>
    <div class="table-responsive d-table">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>案件番号</th>
                <th>受付日</th>
                <th>顧客名</th>
                <th>工事名</th>
                <th>ステータス</th>
                <th>更新日</th>
            </tr>
            </thead>
        </table>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('ProjectComponent mounted.')
        }
    }
</script>
