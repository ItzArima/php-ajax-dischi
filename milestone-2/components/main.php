<main id="app">
    <select v-model="value" name="categories" id="select" @change="filter">
        <option value="">All</option>
        <option value="Rock">Rock</option>
        <option value="Pop">Pop</option>
        <option value="Jazz">Jazz</option>
        <option value="Metal">Metal</option>
    </select>   
    <div class="disks-container" >
        <div class="disk" v-for="disk in disks">
            <div class="disk-card">
                <img :src="disk.poster" alt="">
                <div class="disk-desc">
                    <h2>{{disk.title}}</h2>
                    <p>{{disk.author}}</p>
                    <p>{{disk.year}}</p>
                </div>
            </div>
        </div>
    </div>
</main>