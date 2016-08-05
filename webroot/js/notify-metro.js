$.notify.addStyle("metro", {
    html:
        "<div>" +
            "<div class='image img-notice' data-notify-html='image'/>" +
            "<div class='text-wrapper'>" +
                "<div class='title' data-notify-html='title'/>" +
                "<div class='text' data-notify-html='text'/>" +
            "</div>" +
        "</div>",
    classes: {
        error: {
            "padding": "5px",
            "color": "#fafafa !important",
            "background-color": "#8cb22a",
            "border": "1px solid #e58838"
        },
        viettel:{
        "padding": "5px",
            "color": "#fafafa !important",
            "background-color": "#0A763F",
            "border": "1px solid #e58838"
        },
        success: {
            "padding": "5px",
            "background-color": "#32CD32",
            "border": "1px solid #4DB149"
        },
        info: {
            "padding": "5px",
            "color": "#fafafa !important",
            "background-color": "#1E90FF",
            "border": "1px solid #1E90FF"
        },
        warning: {
            "padding": "5px",
            "background-color": "#FAFA47",
            "border": "1px solid #EEEE45"
        },
        black: {
            "padding": "5px",
            "color": "#fafafa !important",
            "background-color": "#333",
            "border": "1px solid #000"
        },
        white: {
            "padding": "5px",
            "background-color": "#f1f1f1",
            "border": "1px solid #ddd"
        }
    }
});