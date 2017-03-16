#GHETTO TRANSLATION FETCHER - Too lazy to figure out how the transifex client works

lang = input("Input the language shorthand: ")

resources = [
	"https://www.transifex.com/peercoinnet/website-ppc/developers-page/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/exchanges-page/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/footer/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/frequently-asked-questions-page/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/global-variables/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/header/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/homepage/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/investors-page/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/merchants-page/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/mining-page/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/minting-guide/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/mining-guidephp/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/minting-page/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/newcomers-page/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/payment-integration-guide/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/wallet-download-page/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/whitepaper-page/" + lang + "/download/for_use/",
	"https://www.transifex.com/peercoinnet/website-ppc/wallets-page/" + lang + "/download/for_use/"
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
