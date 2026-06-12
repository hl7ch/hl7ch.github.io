# CH-56891003 - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-56891003**

## Example PackagedProductDefinition: CH-56891003

Profile: [PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md)

**identifier**: [Clinical Product Identifier](NamingSystem-PCID.md)/CH-01100869-0672110010000-0001

**packageFor**: [MedicinalProductDefinition: extension = Film-coated tablet; identifier = http://fhir.ch/ig/ch-idmp/sid/mpid#Medical Product Identifier#CH-01100869-0672110010000; indication = Xospata wird angewendet für die Behandlung von erwachsenen Patienten, die an rezidivierter oder refraktärer akuter myeloider Leukämie (AML) mit FMS-ähnlichen Tyrosinkinase 3 (FLT3)-Mutationen leiden.; legalStatusOfSupply = A: Single dispensing requiring a medical or veterinary prescription; additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = gilteritinib,Synthetic](MedicinalProductDefinition-Xospata-Filmcoatedtablet.md)

**containedItemQuantity**: 48 Tablet (Details: EDQM - Standard Terms code15054000 = 'Tablet')

**description**: 

4 Blister zu 7 Tabletten in 1 Box

### LegalStatusOfSupplies

| | |
| :--- | :--- |
| - | **Code** |
| * | A: Single dispensing requiring a medical or veterinary prescription |

### MarketingStatuses

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Country** | **Status** | **DateRange** |
| * | Switzerland | Marketed | 2020-09-24 --> (ongoing) |

> **packaging****identifier**: [GTIN Global Trade Item Number](http://terminology.hl7.org/7.1.0/NamingSystem-gtin.html)/7680672110011**type**: Box**quantity**: 1

### ShelfLifeStorages

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Type** | **Period[x]** | **SpecialPrecautionsForStorage** |
| * | Shelf life of the medicinal product as packaged for sale | No display for Duration (value: 36; unit: month; system: http://unitsofmeasure.org; code: mo) | Do not store above 30°C |

> **packaging****type**: Blister**quantity**: 4
> **containedItem**

### Items

| | |
| :--- | :--- |
| - | **Reference** |
| * | [ManufacturedItemDefinition: status = active; manufacturedDoseForm = Film-coated tablet; unitOfPresentation = Tablet](ManufacturedItemDefinition-MI-Gilteritinibi-hemifumaras-40-Filmcoatedtablet.md) |

**amount**: 12 countable unit(s) (Details: UCUM code1 = '1')




## Resource Content

```json
{
  "resourceType" : "PackagedProductDefinition",
  "id" : "PMP-Gilteritinibi-hemifumaras-40-Filmcoatedtablet",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition"]
  },
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/pcid",
    "value" : "CH-01100869-0672110010000-0001"
  }],
  "packageFor" : [{
    "reference" : "MedicinalProductDefinition/Xospata-Filmcoatedtablet"
  }],
  "containedItemQuantity" : [{
    "value" : 48,
    "unit" : "Tablet",
    "system" : "http://standardterms.edqm.eu",
    "code" : "15054000"
  }],
  "description" : "4 Blister zu 7 Tabletten in 1 Box",
  "legalStatusOfSupply" : [{
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-legal-status-of-supply",
        "code" : "756005034000001",
        "display" : "A: Single dispensing requiring a medical or veterinary prescription"
      }]
    }
  }],
  "marketingStatus" : [{
    "country" : {
      "coding" : [{
        "system" : "urn:iso:std:iso:3166",
        "code" : "CH",
        "display" : "Switzerland"
      }]
    },
    "status" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-Refdata-marketing-status",
        "code" : "756002026002",
        "display" : "Marketed"
      }]
    },
    "dateRange" : {
      "start" : "2020-09-24"
    }
  }],
  "packaging" : {
    "identifier" : [{
      "system" : "https://www.gs1.org/gtin",
      "value" : "7680672110011"
    }],
    "type" : {
      "coding" : [{
        "system" : "http://standardterms.edqm.eu",
        "code" : "30009000",
        "display" : "Box"
      }]
    },
    "quantity" : 1,
    "shelfLifeStorage" : [{
      "type" : {
        "coding" : [{
          "system" : "http://spor.ema.europa.eu/v1/lists/100000073343",
          "code" : "100000073403",
          "display" : "Shelf life of the medicinal product as packaged for sale"
        }]
      },
      "periodDuration" : {
        "value" : 36,
        "unit" : "month",
        "system" : "http://unitsofmeasure.org",
        "code" : "mo"
      },
      "specialPrecautionsForStorage" : [{
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-special-precautions-for-storage",
          "code" : "756005041000009",
          "display" : "Do not store above 30°C"
        }]
      }]
    }],
    "packaging" : [{
      "type" : {
        "coding" : [{
          "system" : "http://standardterms.edqm.eu",
          "code" : "30007000",
          "display" : "Blister"
        }]
      },
      "quantity" : 4,
      "containedItem" : [{
        "item" : {
          "reference" : {
            "reference" : "ManufacturedItemDefinition/MI-Gilteritinibi-hemifumaras-40-Filmcoatedtablet"
          }
        },
        "amount" : {
          "value" : 12,
          "unit" : "countable unit(s)",
          "system" : "http://unitsofmeasure.org",
          "code" : "1"
        }
      }]
    }]
  }
}

```
