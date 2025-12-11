# CH-68291001 - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-68291001**

## Example PackagedProductDefinition: CH-68291001

Profile: [IDMP PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md)

**identifier**: [Clinical Product Identifier](NamingSystem-PCID.md)/CH-7640109110007-6771901-001

**packageFor**: [MedicinalProductDefinition: extension = Film-coated tablet,CUPRIOR wird vergütet zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Erwachsenen, Jugendlichen und Kindern im Alter von 5 Jahren oder älter, die eine Behandlung mit D-Penicillamin nicht vertragen. Die Behandlung muss von Gastroenterologen oder Hepatologen mit Erfahrung bei der Behandlung von Patienten mit Morbus Wilson initiiert und überwacht werden.; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7640109110007-6771901; indication = Cuprior wird angewendet zur Behandlung von Morbus Wilson bei Erwachsenen, Jugendlichen und Kindern im Alter von 5 Jahren oder älter mit Unverträglichkeit gegenüber einer D-Penicillamin-Therapie.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = gilteritinib,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product,07. STOFFWECHSEL](MedicinalProductDefinition-Cuprior-150mg-Filmcoatedtablet.md)

**containedItemQuantity**: 72 Tablet(Details: EDQM - Standard Terms code15054000 = 'Tablet')

**description**: 

CUPRIOR Filmtabl 150 mg 72 Stk

### LegalStatusOfSupplies

| | |
| :--- | :--- |
| - | **Code** |
| * | Medicinal product subject to medical or veterinary prescription (B) |

> **packaging****identifier**:[Global Trade Item Number](NamingSystem-GTIN.md)/7680677190018**type**:Box**quantity**: 1

### ShelfLifeStorages

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Type** | **Period[x]** | **SpecialPrecautionsForStorage** |
| * | Shelf life of the medicinal product as packaged for sale | No display for Duration (value: 36; unit: month; system: http://unitsofmeasure.org; code: mo) | Do not store above 30°C |


### Characteristics

| | | |
| :--- | :--- | :--- |
| - | **Type** | **Value[x]** |
| * | Package Size Type | Modal pack |



## Resource Content

```json
{
  "resourceType" : "PackagedProductDefinition",
  "id" : "PMP-Cuprior-150mg-Filmcoatedtablet",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition"
    ]
  },
  "identifier" : [
    {
      "system" : "http://fhir.ch/ig/ch-epl/sid/pcid",
      "value" : "CH-7640109110007-6771901-001"
    }
  ],
  "packageFor" : [
    {
      "reference" : "MedicinalProductDefinition/Cuprior-150mg-Filmcoatedtablet"
    }
  ],
  "containedItemQuantity" : [
    {
      "value" : 72,
      "unit" : "Tablet",
      "system" : "http://standardterms.edqm.eu",
      "code" : "15054000"
    }
  ],
  "description" : "CUPRIOR Filmtabl 150 mg 72 Stk",
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
        "value" : "7680677190018"
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
          "value" : 36,
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
  },
  "characteristic" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-other-characteristics-type",
            "code" : "756000003001",
            "display" : "Package Size Type"
          }
        ]
      },
      "valueCodeableConcept" : {
        "coding" : [
          {
            "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-epl-foph-other-characteristics-packaged-item",
            "code" : "756005041001",
            "display" : "Modal pack"
          }
        ]
      }
    }
  ]
}

```
