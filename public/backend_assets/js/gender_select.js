$("#name").blur(function() {
    let name = $("#name").val()
    let name_prefix = name.trim().slice(0, 4);
    // console.log($("#name").val());
    // name_prefix
    if (name_prefix.toLowerCase().includes("mst") || name_prefix.toLowerCase().includes("mrs") ||
        name_prefix.toLowerCase().includes("ms") || name_prefix.toLowerCase().includes("miss")) {
        console.log("female");
        $("#gender").val("Female").change();
    } else if (name_prefix.toLowerCase().includes("md") || name_prefix.toLowerCase().includes("mr")) {
        console.log("male");
        $("#gender").val("Male").change();
    } else {
        console.log("other");
        $("#gender").val("").change();
    }
})