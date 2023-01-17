import * as fs from 'fs';

let content = '<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'

fs.readdirSync("src/pages/").forEach(file => {

    const base = 'https://www.desktools.tk/'

    if (file == '404.astro') {
        return
    }

    let slug = file.replace('.astro', '')

    let priority = 0.8
    let changefreq = 'monthly'

    if (slug == 'index') {
        priority = 1.0
        changefreq = 'daily'
        slug = ''
    } else {
        slug += '/'
    }

    const stats = fs.statSync("src/pages/" + file)
    const mtime = stats.mtime
    const year = mtime.getFullYear()
    const date = ("0" + mtime.getDate()).slice(-2)
    const month = getMonthFromString(String(mtime).split(' ')[1])

    function getMonthFromString(mon){
        var d = Date.parse(mon + `${date}, ${year}`)
        if(!isNaN(d)){
           return ("0" + (new Date(d).getMonth() + 1)).slice(-2)
        }
        return -1;
    }

    const lastmod = year + '-' + month + '-' + date
    
    content += `
        <url>
            <loc>${base + slug}</loc>
            <lastmod>${lastmod}</lastmod>
            <changefreq>${changefreq}</changefreq>
            <priority>${priority}</priority>
        </url>`

})


content += '</urlset>'

try {
    fs.writeFileSync('public/sitemap.xml', content)
} catch (err) {
    console.error(err)
}