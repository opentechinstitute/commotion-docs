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
      lang = context.environments.first['page']['lang']
      lang_default = context.registers[:site].config['lang_default']
      tags.sort.each do |tag|
	        tag_url = tag.gsub(' ','-').downcase
          posts_in_tag = context.registers[:site].tags[tag].size
          if lang == lang_default
            html << "<li><a href='/blog/tag/#{tag_url}'>#{tag} (#{posts_in_tag})</a></li>\n"
          else
            html << "<li><a href='/#{lang}/blog/tag/#{tag_url}'>#{tag} (#{posts_in_tag})</a></li>\n"
          end
      end
      html
    end
  end
end
 
Liquid::Template.register_tag('tag_list', Jekyll::TagListTag)
