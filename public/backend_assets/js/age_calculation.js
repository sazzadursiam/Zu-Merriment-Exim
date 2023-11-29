function ageCalculation() {
    var mdate = $("#dob").val().toString();
    var yearThen = parseInt(mdate.substring(0, 4), 10);
    var monthThen = parseInt(mdate.substring(5, 7), 10);
    var dayThen = parseInt(mdate.substring(8, 10), 10);

    var today = new Date();
    var birthday = new Date(yearThen, monthThen - 1, dayThen);

    var differenceInMilisecond = today.valueOf() - birthday.valueOf();

    var year_age = Math.floor(differenceInMilisecond / 31536000000);
    var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);


    var month_age = Math.floor(day_age / 30);

    day_age = day_age % 30;

    var age_str = "";
    if (year_age > 0) {
        age_str = age_str + year_age + " years " + month_age + " months " + day_age + " days";
    } else {
        if (month_age > 0) {
            age_str = age_str + month_age + " months " + day_age + " days";
        } else {
            age_str = age_str + day_age + " days";
        }
    }

    // console.log(year_age+" Y "+month_age+" M "+day_age+" D")
    // $("#age").val(age_str)

    $("#age_years").val(year_age)
    $("#age_months").val(month_age)
    $("#age_days").val(day_age)


}