<main>
    <div class="disks-container" id="app">
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