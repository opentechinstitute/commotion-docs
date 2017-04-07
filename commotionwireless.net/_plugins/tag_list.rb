# place this file in your plugins directory and add the tag to your sidebar
#$ cat source/_includes/custom/asides/tags.html
#<section>
# <h1>Tags</h1>
# <ul id="tags">
# {% tag_list %}
# </ul>
#</section>
 
module Jekyll
  class TagListTag < Liquid::Tag
    def render(context)
      html = ""
      tags = context.registers[:site].tags.keys
      tags.sort.each do |tag|
	tag_url = tag.gsub(' ','-').downcase()
        posts_in_tag = context.registers[:site].tags[tag].size
        html << "<li class='list-group-item'><a href='/blog/tag/#{tag_url}'>#{tag} <span class='badge pull-right'>#{posts_in_tag}</span></a></li>\n"
      end
      html
    end
  end
end
 
Liquid::Template.register_tag('tag_list', Jekyll::TagListTag)
