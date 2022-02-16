<template>
    <div>
        <div>
            <input type="text" id="text" class="p-2 border-gray-400 border"
                   v-model="searchText" placeholder="search text">
            <table class="table-fixed border-collapse">
                <thead>
                <tr>
                    <th colspan="10">Table with randomly generated stuff</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(row, indexR) in filteredRows">
                    <td v-for="(col, indexC) in row" :key="indexR + indexC"
                        v-html="highlightMatches(col)"
                        class="p-2 border-gray-400 border">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            let rows = [];
            for (let i = 1; i < 11; i++) {
                let currentRow = [];
                for (let j = 1; j < 11; j++) {
                    let el = (j % 2 === 0 && i % 2 === 0) ? 'test_' + i + '_' + j : fake.word();
                    currentRow.push(el);
                }
                rows.push(currentRow);
            }
            this.rows = rows;

        },
        data() {
            return {
                searchText: '',
                rows: []
            }
        },
        computed: {
            filteredRows() {
                return this.rows.filter(row => {
                    const text = row.toString().toLowerCase();
                    const searchTerm = this.searchText.toLowerCase();

                    return text.includes(searchTerm);
                });
            }

        },
        methods: {
            highlightMatches(text) {
                const matchExists = text.toLowerCase().includes(this.searchText.toLowerCase());
                if (!matchExists) return text;

                const re = new RegExp(this.searchText, 'ig');
                return text.replace(re, matchedText => `<span class="text-blue-600 font-bold">${matchedText}</span>`);
            }
        }
    }
</script>
