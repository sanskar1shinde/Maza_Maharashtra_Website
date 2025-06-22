//MUMBAI
var mumbai = {
    Hotel_Shubham_Lodging_Boarding: {
    },
    S_O_Y_Amrute_Farms: {
    },

    Darsh_Residency: {
   
    },

    Imperial_Palace_Resort:{

    },

    Luxury_villa_104:{

    },

    The_Park_Hotels_Navi_Mumbai:{

    },

    Hotel_Aishwarya_Residency:{

    },

    Hotel_Grande_51:{

    },

    Sangam_Relax:{

    },

    Townhouse_Residency:{

    },

    Nakshatra_Residency:{

    }
}

var pune = {
    Meritas_Crystal_Resort: {
    },
    The_Dukes_Retreat: {
    },

    Aamby_Valley_City: {
   
    },

    Hotel_Shivar:{

    },

    Hotel_sahil:{

    },

    Abhiruchi_Wellness_Center_and_Resort:{

    },

    The_Lagoona_Resort:{

    },

    Dukes_Retreat_Resort:{

    },

    Fariyas_Resort:{

    },

    Hotel_Shivneri:{

    },

    SPOT_ON_67339:{

    },

    Hotel_Aashiyana: {
    },
    Aquarius_Resort: {
    },

    Teak_Trail: {
   
    },

    Forest_Park:{

    },

    Astro_Agro_Farm:{

    },

    Della_Resorts:{

    },

    Jijau_niwas:{

    },

    Rain_Forest_Villa_Bhimashankar_and_Resort:{

    },

    Natraj_Holiday_Resort:{

    },

    Neelam_Hills_Resort_Bhimashankar:{

    }  
}

var nashik = {
    S_K_Farm: {
    },
    Hotel_Tulip_Restaurant: {
    },

    Hotel_Akshay_Lodge: {
   
    },

    Manas_Lifestyle_Resort:{

    },

    Rainforest_Resort:{

    },

    The_Grand_Gardens_Resort:{

    }
}

var nagpur = {
    Hotel_Vikrant: {
    },
    MTDC_Resort_Lonar: {
    },

    Forest_Rest_House_Lonar: {
   
    },

    Hotel_Manmandir:{

    },
    Tigers_Heaven_Resort:{

    },
    Jharna_Resort_Tadoba:{

    }
}


var kolhapur = {
    Ambika_Yatri_Niwas: {
    },
    Lotus_Yatri_Niwas: {
    },

    Grey_Stone_Lakefront_Penthouse: {
   
    },

    Green_Valley_Resort:{

    },

    Dark_Forest_Retreat:{

    },

    Whistling_Woods_Amboli:{  

    }
}

var satara = {
    Advait_Resort: {
    },
    Evershine_Resort: {
    },

    Brightland_Resort: {
   
    },

    Bella_Vista_Resort:{

    },

    Ramsukh_Resorts:{

    },

    Summer_Plaza_Retreat:{

    },

    Vikrant_hotel:{

    },

    Mother_Farm:{

    },

    Hotel_Omkar:{

    },

    Nature_Plateau_Paradise:{

    },

    Heritagewadi:{

    },
    Kaasai_Resort:{

    },
    Shivsagar_Agro_Tourism_Tapola:{

    },
    Mangalya_Cottages_Agro_Tourism:{

    },
    Hotel_Shivneri_Tapola:{

    },
    Hotel_Happy_Home:{

    },
    Hotel_Temple_View:{

    }
}

var ratnagiri = {
    Jay_Hotel: {
    },
    Hotel_Raigad: {
    },

    Parvati_Hotel: {
   
    },

    Acharekar_Home:{

    },

    Serina_House:{

    },

    Kulswamini_Home_stay:{

    },

    Hotel_Shree_Sagar:{

    },

    Hotel_MADHUBAN:{

    },

    Hotel_Landmark:{

    }
}

var aurangabad = {
    Click_Hotel_Aurangabad: {
    },
    Apple_Hotel_Aurangabad: {
    },

    Hotel_Yash_Executive: {
   
    }
}

var raigad = {
    Priyansh_Home_stay: {
    },
    Tranquil_Beach_Resort: {
    },

    Shanti_Guest_House: {
   
    }
}


window.onload = function CCU(){
    const selectCourse = document.getElementById('mumbai');
    const selectCourse_1 = document.getElementById('pune');
    const selectCourse_2 = document.getElementById('nashik');
    const selectCourse_3 = document.getElementById('nagpur');
    const selectCourse_4 = document.getElementById('kolhapur');
    const selectCourse_5 = document.getElementById('satara');
    const selectCourse_6 = document.getElementById('ratnagiri');
    const selectCourse_7 = document.getElementById('aurangabad');
    const selectCourse_8 = document.getElementById('raigad');
       
        selects = document.querySelectorAll('select');
       
        selects.forEach(select => {
            if(select.disabled == true){
                select.style.cursor = "auto"
            }
            else{
                select.style.cursor = "pointer"
            }
        })

        for(let course in mumbai){
            // console.log(country);
            selectCourse.options[selectCourse.options.length] = new Option(course, course)
        }

        for(let data_1 in pune){
            // console.log(country);
            selectCourse_1.options[selectCourse_1.options.length] = new Option(data_1, data_1)
        }

        for(let course in nashik){
            // console.log(country);
            selectCourse_2.options[selectCourse_2.options.length] = new Option(course, course)
        }

        for(let course in nagpur){
            // console.log(country);
            selectCourse_3.options[selectCourse_3.options.length] = new Option(course, course)
        }

        for(let course in kolhapur){
            // console.log(country);
            selectCourse_4.options[selectCourse_4.options.length] = new Option(course, course)
        }

        for(let course in satara){
            // console.log(country);
            selectCourse_5.options[selectCourse_5.options.length] = new Option(course, course)
        }

        for(let course in ratnagiri){
            // console.log(country);
            selectCourse_6.options[selectCourse_6.options.length] = new Option(course, course)
        }

        for(let course in aurangabad){
            // console.log(country);
            selectCourse_7.options[selectCourse_7.options.length] = new Option(course, course)
        }

        for(let course in raigad){
            // console.log(country);
            selectCourse_8.options[selectCourse_8.options.length] = new Option(course, course)
        }
}