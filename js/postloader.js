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
            '</div>';

    out = out + '<div class="heifer-post-tags">';
    post.tags.forEach(function(t){
        out = out + '<img src="/images/' + t + '.png" data-tag="' + t + '"class="heifer-post-tag-image heifer-tag-filter">'
    });

    out = out + '</div>' +
        '</div>';

    return out;
}
