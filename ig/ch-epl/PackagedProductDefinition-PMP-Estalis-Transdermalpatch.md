# CH-54704089 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-54704089**

## Example PackagedProductDefinition: CH-54704089

Profile: [IDMP PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md)

**identifier**: [Clinical Product Identifier](NamingSystem-PCID.md)/CH-7601001029439-5470402-097

**packageFor**: [MedicinalProductDefinition: extension = Transdermal patch; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001029439-5470402; indication = Klimakterische Beschwerden: Behandlung der Symptome des Östrogenmangels infolge der natürlichen oder künstlichen Menopause bei nicht-hysterektomierten Frauen. Osteoporoseprophylaxe: Vorbeugung oder Verzögerung einer durch Östrogenmangel induzierten Osteoporose bei postmenopausalen Frauen mit hohem Frakturrisiko, für die eine Behandlung mit anderen zur Prävention der Osteoporose zugelassenen Arzneimitteln nicht in Frage kommt, oder bei Frauen die gleichzeitig an behandlungsbedürftigen Symptomen des Östrogenmangels leiden.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = norethisterone and estrogen,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product](MedicinalProductDefinition-Estalis-Transdermalpatch.md)

**containedItemQuantity**: 24 Patch(Details: EDQM - Standard Terms code15036000 = 'Patch')

**description**: 

ESTALIS Matrixpfl 50/250 24 Stk

### LegalStatusOfSupplies

| | |
| :--- | :--- |
| - | **Code** |
| * | Medicinal product subject to medical or veterinary prescription (B) |

> **packaging****identifier**:[Global Trade Item Number](NamingSystem-GTIN.md)/7680547040979**type**:Box**quantity**: 1

### ShelfLifeStorages

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Type** | **Period[x]** | **SpecialPrecautionsForStorage** |
| * | Shelf life of the medicinal product as packaged for sale | No display for Duration (value: 6; unit: month; system: http://unitsofmeasure.org; code: mo) | protect from light |




## Resource Content

```json
{
  "resourceType" : "PackagedProductDefinition",
  "id" : "PMP-Estalis-Transdermalpatch",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition"
    ]
  },
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/pcid",
      "value" : "CH-7601001029439-5470402-097"
    }
  ],
  "packageFor" : [
    {
      "reference" : "MedicinalProductDefinition/Estalis-Transdermalpatch"
    }
  ],
  "containedItemQuantity" : [
    {
      "value" : 24,
      "unit" : "Patch",
      "system" : "http://standardterms.edqm.eu",
      "code" : "15036000"
    }
  ],
  "description" : "ESTALIS Matrixpfl 50/250 24 Stk",
  "legalStatusOfSupply" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-legal-status-of-supply",
            "code" : "756005022003",
            "display" : "Medicinal product subject to medical or veterinary prescription (B)"
          }
        ]
      }
    }
  ],
  "packaging" : {
    "identifier" : [
      {
        "system" : "urn:oid:2.51.1.1",
        "value" : "7680547040979"
      }
    ],
    "type" : {
      "coding" : [
        {
          "system" : "http://standardterms.edqm.eu",
          "code" : "30009000",
          "display" : "Box"
        }
      ]
    },
    "quantity" : 1,
    "shelfLifeStorage" : [
      {
        "type" : {
          "coding" : [
            {
              "system" : "http://spor.ema.europa.eu/v1/lists/100000073343",
              "code" : "100000073403",
              "display" : "Shelf life of the medicinal product as packaged for sale"
            }
          ]
        },
        "periodDuration" : {
          "value" : 6,
          "unit" : "month",
          "system" : "http://unitsofmeasure.org",
          "code" : "mo"
        },
        "specialPrecautionsForStorage" : [
          {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage",
                "code" : "756005042004",
                "display" : "protect from light"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
