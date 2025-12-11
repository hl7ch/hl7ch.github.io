# CH-67431001 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-67431001**

## Example PackagedProductDefinition: CH-67431001

Profile: [IDMP PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md)

**identifier**: [Clinical Product Identifier](NamingSystem-PCID.md)/CH-7601001403062-6743101-001

**packageFor**: [MedicinalProductDefinition: extension = Capsule, hard,TRIOGEN wird vergütet zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Patienten, die eine Behandlung mit D-Penicillamin nicht vertragen. Die Behandlung muss von Gastroenterologen oder Hepatologen mit Erfahrung bei der Behandlung von Patienten mit Morbus Wilson initiiert und überwacht werden.; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001403062-6743101; indication = Zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Patienten, die eine Behandlung mit D-Penicillamin nicht vertragen.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = trientine,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product,07. STOFFWECHSEL](MedicinalProductDefinition-Triogen-250mg-Capsule.md)

**containedItemQuantity**: 100 Capsule(Details: EDQM - Standard Terms code15012000 = 'Capsule')

**description**: 

TRIOGEN Kaps 250 mg Ds 100 Stk

### LegalStatusOfSupplies

| | |
| :--- | :--- |
| - | **Code** |
| * | Medicinal product subject to medical or veterinary prescription (B) |

> **packaging****identifier**:[Global Trade Item Number](NamingSystem-GTIN.md)/7680674310013**type**:Box**quantity**: 1

### ShelfLifeStorages

| | | |
| :--- | :--- | :--- |
| - | **Type** | **SpecialPrecautionsForStorage** |
| * | Shelf life of the medicinal product as packaged for sale | Do not store above 30°C |




## Resource Content

```json
{
  "resourceType" : "PackagedProductDefinition",
  "id" : "PMP-Triogen-250mg-Capsule",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition"
    ]
  },
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/pcid",
      "value" : "CH-7601001403062-6743101-001"
    }
  ],
  "packageFor" : [
    {
      "reference" : "MedicinalProductDefinition/Triogen-250mg-Capsule"
    }
  ],
  "containedItemQuantity" : [
    {
      "value" : 100,
      "unit" : "Capsule",
      "system" : "http://standardterms.edqm.eu",
      "code" : "15012000"
    }
  ],
  "description" : "TRIOGEN Kaps 250 mg Ds 100 Stk",
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
        "value" : "7680674310013"
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
