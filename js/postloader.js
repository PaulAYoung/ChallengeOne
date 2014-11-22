function postLoader(url, node){
    this.url = url;
    this.getPosts();
    this.posts=[];
    this.postnode = $(node);
}

postLoader.prototype.getPosts = function(args){
    $.getJSON(this.url, args, $.proxy(function(d){
        this.posts = d;
        this.onLoad();
    }, this));
};

postLoader.prototype.onLoad = function(){
    console.log("posts loaded");
    this.posts.forEach($.proxy(function(d){
            this.postnode.append(shortPost(d));
        }, this)
    );
};

function formatPost(post){
    // takes a post and outputs a nice view of it. 
    var processed = post.post.map(function(d){
        if (typeof d !== 'object'){
            return d;
        }
    if (d.type === "image"){
        return '<img src="' + d.url + '">';
    }
        return d;
    });

    return processed.join();
}

function shortPost(post){
    var out = '<div class="heifer-post">' +
            '<div class="heifer-post-title">' +
                post.title +
            '</div>';

    for (var idx=0;idx<post.post.length; idx++){
        if (typeof post.post[idx] === "object" &&
                post.post[idx].type === "image"){
                out = out +
                    '<div class="heifer-post-image">' +
                        '<img src="' + post.post[idx].url + '">';
                    '</div>';
                    break;
            }
    }
    out = out + '<div class="heifer-post-desc">' +
                post.description +
            '</div>'+
        '</div>';

    return out;
}
