Date.prototype.toShortFormat = function() {

    let monthNames =["Januari","Februari","Maret","April",
                      "Mei","Juni","Juli","Agustus",
                      "September", "October","November","December"];
    
    let day = ["Sen","Sel","Rab","Kam","Jum","Sab","Min"];
    
    let monthIndex = this.getMonth();
    let monthName = monthNames[monthIndex];

    let dayIndex = this.getDay();
    let dayName = day[dayIndex];
    
    function addZero(i) {
        if (i < 10) {i = "0" + i}
        return i;
    }
    let hours = addZero(this.getHours())
    minute = addZero(this.getMinutes());
    
    return `${dayName}, ${dayIndex} ${monthName} ${hours+`.`+minute}`;  
}

function saveData(e){
    // e.preventDefault();
    let url = $(e).data("url");
    let title = $(e).data("title");
    let image = $(e).data("image");
    let sendData = {
        image : image,
        title : title,
        url : url
    };
        $.ajax({
            type: "POST",
            url: "add.php",
            data: sendData,
        });
}
$(document).ready(function(){
    $( "#formId" ).submit(function( event ) {
        event.preventDefault();
        let query = $("#searchInput").val();
        let url="https://newsapi.org/v2/everything?q="+query+"&from=2022-03-31&to=2022-03-31&sortBy=popularity&apiKey=50dafe69384e43e8a550f899fca93df1";    
        if(query !== ""){
            $.ajax({
                url:url,
                method:"GET",
                dataType: "json",

                beforeSend:function(){
                    $(".skeleton").show();
                },
                complete:function(){
                    $(".skeleton").hide();
                },
                success: function(data){
                    
                    let newsArticle=data.articles;
                    let result = "";
                    let card = [];

                    for (var i in newsArticle){
                        if (newsArticle[i].author == null){
                            newsArticle[i].author = 'Anonim';
                        }
                        else if(newsArticle[i].author.length > 20){
                            newsArticle[i].author = newsArticle[i].author.substring(0,20) + '...';
                        }
                        card.push(`
                            <div class="card hoverable">
                                <img class="card-img-top"
                                    src="${((newsArticle[i].urlToImage) ? newsArticle[i].urlToImage:"https://keera.wajokab.go.id/img/no-image.png")}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title text-primary"> ${((newsArticle[i].source.name) ? newsArticle[i].source.name : "Anonim")}</h4>
                                    <h6 class="card-title text-muted"><img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-7--v1.png" width="30px"/> ${((newsArticle[i].author) ? newsArticle[i].author : "Anonim")} / ${new Date(newsArticle[i].publishedAt).toShortFormat()}</h6>
                                    <h4 class="card-title">${newsArticle[i].title}</h4>
                                    <p class="card-text">${newsArticle[i].description}</p>
                                    <a href="${newsArticle[i].url}" class="btn btn-primary mt-auto" onclick="saveData(this)" data-url="${newsArticle[i].url}" data-title="${newsArticle[i].title}" data-image="${newsArticle[i].urlToImage}">Read More</a>
                                </div>
                            </div>
                        `);
                        
                    }
                    for (var i=0; i<=newsArticle.length; i++){
                        if (card.length !== 0){
                            result+=`
                            <div class="row mb-3">
                                <div class="col news1">`+((card.length !== 0) ? card.shift() : "")+`
                                </div>
                                <div class="col">
                                    <div class="row mb-3">
                                        <div class="col news1">
                                        `+((card.length !== 0) ? card.shift() : "")+`
                                        </div>
                                        <div class="col news1">
                                        `+((card.length !== 0) ? card.shift() : "")+`
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col news1">
                                        `+((card.length !== 0) ? card.shift() : "")+`
                                        </div>
                                        <div class="col news1">
                                        `+((card.length !== 0) ? card.shift() : "")+`
                                        </div>
                                    </div>
                                </div>
                            </div>`;                        
                            if((i + 1) == (newsArticle.length/5)){
                                break;
                            }  
                        }
                        
                    }

                    
                        $('.news_row').html(result);
                   
                        // $('.news_row').html("News Not Found");
                    
                },
                error: function(){
                    console.log("Error");
                }
            })
        }else{
            console.log("None");
        }
        
      });

    //view news
    let url="https://newsapi.org/v2/everything?q=apple&from=2022-03-31&to=2022-03-31&sortBy=popularity&apiKey=50dafe69384e43e8a550f899fca93df1";
    $.ajax({
        url:url,
        method:"GET",
        dataType: "json",

        beforeSend:function(){
            $(".skeleton").show();
        },
        complete:function(){
            $(".skeleton").hide();
        },
        success:function(response){
            let row = "";
            let latestNews = response.articles;
            let card = [];

            for (var i in latestNews){
                if (latestNews[i].author == null){
                    latestNews[i].author = 'Anonim';
                }
                else if(latestNews[i].author.length > 20){
                    latestNews[i].author = latestNews[i].author.substring(0,20) + '...';
                }
                card.push(`
                    <div class="card hoverable">
                        <img class="card-img-top"
                            src="${latestNews[i].urlToImage}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title text-primary">${latestNews[i].source.name}</h5>
                            <h6 class="card-title text-muted" name="title"><img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-7--v1.png" width="30px"/> ${latestNews[i].author} / ${new Date(latestNews[i].publishedAt).toShortFormat()}</h6>
                            <h4 class="card-title" name="title">${latestNews[i].title}</h4>
                            <p class="card-text">${latestNews[i].description}</p>
                            <a href="${latestNews[i].url}" class="btn btn-primary mt-auto" onclick="saveData(this)" data-url="${latestNews[i].url}" data-title="${latestNews[i].title}" data-image="${latestNews[i].urlToImage}">Read More</a>
                        </div>
                    </div>
                `);
            }
            for (var i=0; i<latestNews.length; i++){
                row+=`
                <div class="row mb-3">
                    <div class="col news1">`+card.shift()+`
                    </div>
                    <div class="col">
                        <div class="row mb-3">
                            <div class="col news1">
                            `+card.shift()+`
                            </div>
                            <div class="col news1">
                            `+card.shift()+`
                            </div>
                        </div>
                        <div class="row">
                            <div class="col news1">
                            `+card.shift()+`
                            </div>
                            <div class="col news1">
                            `+card.shift()+`
                            </div>
                        </div>
                    </div>
                </div>`;
                if((i + 1) == (latestNews.length/5)){
                    break;
                }
            }
           
            $('.news_row').html(row);
           
        },
        error:function(){
            $('.news1').html("The News is not ready");
        }
    })
});


