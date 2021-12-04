import requests
from bs4 import BeautifulSoup
import pandas as pd

url = "https://fr.wikipedia.org/wiki/Liste_des_d%C3%A9partements_fran%C3%A7ais"

reponse = requests.get(url)

if reponse.ok:
	print(reponse)
else:
	print("Erreur de connexion")

site = BeautifulSoup(reponse.text)

tables = site.find_all("table")

table = tables[4]

lidep = table.find_all("tr")[1].find_all("li")

departement = []
id_departement = []

for li in lidep:
	departement.append(str(li.text).split(" ")[1])
	id_departement.append(str(li.text).split(" ")[0])

print(departement)

id_departement_sans_corse = []

for i in range(len(id_departement)):
	if i > 19


"""p = p[1:102]

departement = []

for el in p:
	if " - " in str(el):
		departement.append(str(el).replace("<p>", "").replace("</p>", ""))

nom_departement = []

for dep in departement:
	new_nom = ""
	nom = dep.replace(" ", "").split("-")
	nom = nom[1:-1]
	if len(nom) > 1:
		for n in nom:
			new_nom += n + "-"
		nom_departement.append(new_nom[:-1])
	else:
		nom_departement.append(nom[0])

print(nom_departement)"""

df = pd.DataFrame(id_departement, columns=["id_dep"])
df["nom_dep"] = departement
df.to_csv("departement.csv", index=False)