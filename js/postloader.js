function postLoader(url, node){
    this.url = url;
    this.getPosts();
    this.postnode = $(node);
}

postLoader.prototype.getPosts = function(args){
    $.getJSON(this.url, args, $.proxy(function(d){
        this.posts = d;
        this.onLoad();
    }, this));
};

postLoader.prototype.onLoad = function(){
    this.loadPosts(this.posts);
};

postLoader.prototype.loadPosts = function(posts){
    posts.forEach($.proxy(function(d){
            this.postnode.append(shortPost(d));
        }, this)
    );
    $(".heifer-tag-filter").click($.proxy(this.tagClick, this));
};

postLoader.prototype.clearPosts = function(){
    this.postnode.empty();
};

postLoader.prototype.filterPosts = function(filter){
    var posts = [];
    this.posts.forEach(function(p){
        if (p.tags.indexOf(filter) >= 0 ||
            p.region.indexOf(filter) >= 0){
                posts.push(p);
            }
    });
    this.clearPosts();
    this.loadPosts(posts);
    return posts;
};

postLoader.prototype.tagClick = function(e){
    var tag = e.target.dataset.tag;
    console.log(tag);
    this.filterPosts(tag);
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
    var out = '<div class="heifer-post" style="text-align:center; border-bottom: 1px solid #dbdbdb;padding-bottom:100px">' +
            '<div class="heifer-post-title" style="padding-bottom:20px; font-size:40px; font-family: Copperplate / Copperplate Gothic Light, sans-serif;">' +
                post.title +
            '</div>';

    for (var idx=0;idx<post.post.length; idx++){
        if (typeof post.post[idx] === "object" &&
                post.post[idx].type === "image"){
                out = out +
                    '<div class="heifer-post-image">' +
                        '<img src="' + post.post[idx].url + '" style="height:300px">';
                    '</div>';
                    break;
            }
    }
    

    out = out + '<div class="heifer-post-tags" style="padding-top:20px;padding-bottom:20px">';
    post.tags.forEach(function(t){
    out = out + '<img src="/images/' + t + '.png" data-tag="' + t + '" class="heifer-tag-filter heifer-post-tag-image" style="height:50px">'
    });
    out = out + '</div>';


    out = out + '<div class="heifer-post-desc" style="font-size:25px">' +
                post.description +
            '</div>';

    out = out + '<div class = "heifer-comments" style="text-align:center;padding-top:20px;">'
    out = out + '<input type="text" class="form-control" placeholder="Comments..." style="display:inline-block;width:600px;height:150px">';
    out = out + '</div>'

    out = out + '</div>';

    return out;
}
