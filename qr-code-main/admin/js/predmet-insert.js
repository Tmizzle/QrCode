const app = Vue.createApp({
    data(){
        return{
            smerovi: {'KG' : ['Informatika', 'Drumski saobracaj', 'Urbano inzinjerstvo'],
                      'TS' : ['Drumski saobracaj', 'Informacione tehnologije', 'Masinsko inzinjerstvo - HIP', 'Masinsko inzinjerstvo - PRO'],
                      'AR' : ['Zastita zivotne i radne sredine', 'Informacione tehnologije', 'Menadzment u turizmu', 'Primenjena ekonomija i preduzetnistvo', 'Tehnologija hrane i gastronomija'],
                      'KS' : ['Tehnologija', 'Zastita zivotne sredine i zastita na radu', 'Informatika i racunarstvo']},
            data: [],
            akademija: '',
        }
    },
    methods:{
        doOnChange(event){
            this.akademija = event.target.value; 
            this.data = [];
            var collectedData = this.smerovi[event.target.value];
            collectedData.forEach(element => {
                this.data.push(element);
            });
        }
    }
});

app.mount('#app');