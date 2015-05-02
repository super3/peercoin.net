#GHETTO TRANSLATION FETCHER - Too lazy to figure out how the transifex client works

lang = input("Input the language shorthand: ")

resources = [
	"https://www.transifex.com/projects/p/website-ppc/resource/developers-page/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/exchanges-page/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/footer/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/frequently-asked-questions-page/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/global-variables/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/header/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/homepage/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/investors-page/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/merchants-page/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/mining-page/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/minting-guide/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/mining-guidephp/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/minting-page/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/newcomers-page/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/payment-integration-guide/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/wallet-download-page/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/whitepaper-page/l/" + lang + "/download/for_use/",
	"https://www.transifex.com/projects/p/website-ppc/resource/wallets-page/l/" + lang + "/download/for_use/"
]

import requests

final = "<?php\n$lang['"+ lang +"'] = array();\n"
cookies = dict(sessionid='')

for resource in resources:
	o = requests.get(resource, cookies=cookies)
	o.encoding = "utf-8"

	final += o.text + "\n"

final = final.replace("'en'", "'"+lang+"'")

with open(lang+'.php', 'w') as f:
    f.write(final)

print("Success!")