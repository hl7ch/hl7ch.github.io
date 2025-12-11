# CH-52042011 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-52042011**

## Example PackagedProductDefinition: CH-52042011

Profile: [IDMP PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md)

**identifier**: [Clinical Product Identifier](NamingSystem-PCID.md)/CH-7601001346451-5204201-011

**packageFor**: [MedicinalProductDefinition: extension = Tablet and solvent for rectal suspension,Distale Form der Colitis ulcerosa bei ungenügendem Ansprechen auf oder Kontraindikation für Mesalazin.; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001346451-5204201; combinedPharmaceuticalDoseForm = Tablet and solvent for rectal suspension; indication = Leichte bis mittelschwere Colitis ulcerosa des Rectums sowie des Colon sigmoideum.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = budesonide,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product,04. GASTROENTEROLOGICA](MedicinalProductDefinition-Entocort-Solvent-and-Tablet.md)

**containedItemQuantity**: 7 Tablet(Details: EDQM - Standard Terms code15054000 = 'Tablet'), 7 Bottle(Details: EDQM - Standard Terms code30008000 = 'Bottle')

**description**: 

ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk

### LegalStatusOfSupplies

| | |
| :--- | :--- |
| - | **Code** |
| * | Medicinal product subject to medical or veterinary prescription (B) |

> **packaging****identifier**:[Global Trade Item Number](NamingSystem-GTIN.md)/7680520420118**type**:Box**quantity**: 1

### ShelfLifeStorages

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Type** | **Period[x]** | **SpecialPrecautionsForStorage** |
| * | Shelf life of the medicinal product as packaged for sale | No display for Duration (value: 60; unit: month; system: http://unitsofmeasure.org; code: mo) | Do not store above 30°C |




## Resource Content

```json
{
  "resourceType" : "PackagedProductDefinition",
  "id" : "PMP-Entocort-Solvent-and-Tablet",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition"
    ]
  },
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/pcid",
      "value" : "CH-7601001346451-5204201-011"
    }
  ],
  "packageFor" : [
    {
      "reference" : "MedicinalProductDefinition/Entocort-Solvent-and-Tablet"
    }
  ],
  "containedItemQuantity" : [
    {
      "value" : 7,
      "unit" : "Tablet",
      "system" : "http://standardterms.edqm.eu",
      "code" : "15054000"
    },
    {
      "value" : 7,
      "unit" : "Bottle",
      "system" : "http://standardterms.edqm.eu",
      "code" : "30008000"
    }
  ],
  "description" : "ENTOCORT Enema Klistier Lösung + Tabletten 7 Stk",
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
        "value" : "7680520420118"
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
          "value" : 60,
          "unit" : "month",
          "system" : "http://unitsofmeasure.org",
          "code" : "mo"
        },
        "specialPrecautionsForStorage" : [
          {
            "coding" : [
              {
                "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage",
                "code" : "756005042009",
                "display" : "Do not store above 30°C"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
