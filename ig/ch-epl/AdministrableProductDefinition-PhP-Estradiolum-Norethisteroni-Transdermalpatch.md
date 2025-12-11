# PhP Estradiol-hemihydrate and Norethisteroni-acetas Transdermal-patch - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PhP Estradiol-hemihydrate and Norethisteroni-acetas Transdermal-patch**

## Example AdministrableProductDefinition: PhP Estradiol-hemihydrate and Norethisteroni-acetas Transdermal-patch

Profile: [CH IDMP AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md)

**status**: Active

**formOf**: [MedicinalProductDefinition: extension = Transdermal patch; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001029439-5470402; indication = Klimakterische Beschwerden: Behandlung der Symptome des Östrogenmangels infolge der natürlichen oder künstlichen Menopause bei nicht-hysterektomierten Frauen. Osteoporoseprophylaxe: Vorbeugung oder Verzögerung einer durch Östrogenmangel induzierten Osteoporose bei postmenopausalen Frauen mit hohem Frakturrisiko, für die eine Behandlung mit anderen zur Prävention der Osteoporose zugelassenen Arzneimitteln nicht in Frage kommt, oder bei Frauen die gleichzeitig an behandlungsbedürftigen Symptomen des Östrogenmangels leiden.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product](MedicinalProductDefinition-Estalis-Transdermalpatch.md)

**administrableDoseForm**: Transdermal patch

**unitOfPresentation**: Patch

### RouteOfAdministrations

| | |
| :--- | :--- |
| - | **Code** |
| * | Transdermal use |



## Resource Content

```json
{
  "resourceType" : "AdministrableProductDefinition",
  "id" : "PhP-Estradiolum-Norethisteroni-Transdermalpatch",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-administrableproductdefinition"
    ]
  },
  "status" : "active",
  "formOf" : [
    {
      "reference" : "MedicinalProductDefinition/Estalis-Transdermalpatch"
    }
  ],
  "administrableDoseForm" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "10519000",
        "display" : "Transdermal patch"
      }
    ]
  },
  "unitOfPresentation" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "15036000",
        "display" : "Patch"
      }
    ]
  },
  "routeOfAdministration" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://standardterms.edqm.eu",
            "code" : "20070000",
            "display" : "Transdermal use"
          }
        ]
      }
    }
  ]
}

```
