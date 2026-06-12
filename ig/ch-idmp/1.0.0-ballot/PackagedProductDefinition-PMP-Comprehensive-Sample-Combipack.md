# CH-56891003 - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-56891003**

## Example PackagedProductDefinition: CH-56891003

Profile: [PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md)

**identifier**: [Clinical Product Identifier](NamingSystem-PCID.md)/CH-11111111-1234560010000-0002

**packageFor**: [MedicinalProductDefinition: extension = Cream + Pessary; identifier = http://fhir.ch/ig/ch-idmp/sid/mpid#Medical Product Identifier#CH-11111111-1234560010000; combinedPharmaceuticalDoseForm = Cream + Pessary; indication = Comprehensive Sample Combipack wird angewendet zur Behandlung der bakteriellen Vaginose (früher bezeichnet als Haemophilus-Vaginitis, Gardnerella-Vaginitis, unspezifische Vaginitis, Corynebacterium-Vaginitis oder anaerobe Vaginose); legalStatusOfSupply = D: Dispensed following expert advice; additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = nystatin,NA NAS,Synthetic](MedicinalProductDefinition-Comprehensive-Sample-Combipack.md)

**containedItemQuantity**: 1 Tube (Details: EDQM - Standard Terms code15058000 = 'Tube'), 6 Vaginal Tablet (Details: EDQM - Standard Terms code15054000 = 'Tablet')

**description**: 

Comprehensive Sample Combipack 40 g Salbe und 3 x 2 Vaginalzäpfchen

### LegalStatusOfSupplies

| | |
| :--- | :--- |
| - | **Code** |
| * | D: Dispensed following expert advice |

### MarketingStatuses

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Country** | **Status** | **DateRange** |
| * | Switzerland | Marketed | 2020-09-24 --> 2026-12-31 |

> **packaging****identifier**: [GTIN Global Trade Item Number](http://terminology.hl7.org/7.1.0/NamingSystem-gtin.html)/7680612345678**type**: Box**quantity**: 1

### ShelfLifeStorages

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Type** | **Period[x]** | **SpecialPrecautionsForStorage** |
| * | Shelf life of the medicinal product as packaged for sale | No display for Duration (value: 24; unit: month; system: http://unitsofmeasure.org; code: mo) | at room temperature (15 - 25°C) |
| * |  |  | protect from light |
| * |  |  | Store in the original container |
| * | Shelf life after first opening the immediate packaging | No display for Duration (value: 6; unit: month; system: http://unitsofmeasure.org; code: mo) |  |

> **packaging****type**: Blister**quantity**: 3
> **containedItem**

### Items

| | |
| :--- | :--- |
| - | **Reference** |
| * | [ManufacturedItemDefinition: status = active; manufacturedDoseForm = Pessary; unitOfPresentation = Pessary](ManufacturedItemDefinition-MI-Comprehensive-Sample-VaginalPessary.md) |

**amount**: 2 countable unit(s) (Details: UCUM code1 = '1')

> **packaging****type**: Tube**quantity**: 1
> **containedItem**

### Items

| | |
| :--- | :--- |
| - | **Reference** |
| * | [ManufacturedItemDefinition: status = active; manufacturedDoseForm = Vaginal Cream; unitOfPresentation = Tube](ManufacturedItemDefinition-MI-Comprehensive-Sample-VaginalCream.md) |

**amount**: 10 mg (Details: UCUM codemg = 'mg')


> **packaging****type**: Sachet**quantity**: 1



## Resource Content

```json
{
  "resourceType" : "PackagedProductDefinition",
  "id" : "PMP-Comprehensive-Sample-Combipack",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition"]
  },
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/pcid",
    "value" : "CH-11111111-1234560010000-0002"
  }],
  "packageFor" : [{
    "reference" : "MedicinalProductDefinition/Comprehensive-Sample-Combipack"
  }],
  "containedItemQuantity" : [{
    "value" : 1,
    "unit" : "Tube",
    "system" : "http://standardterms.edqm.eu",
    "code" : "15058000"
  },
  {
    "value" : 6,
    "unit" : "Vaginal Tablet",
    "system" : "http://standardterms.edqm.eu",
    "code" : "15054000"
  }],
  "description" : "Comprehensive Sample Combipack 40 g Salbe und 3 x 2 Vaginalzäpfchen",
  "legalStatusOfSupply" : [{
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-legal-status-of-supply",
        "code" : "756005034000005",
        "display" : "D: Dispensed following expert advice"
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
      "start" : "2020-09-24",
      "end" : "2026-12-31"
    }
  }],
  "packaging" : {
    "identifier" : [{
      "system" : "https://www.gs1.org/gtin",
      "value" : "7680612345678"
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
        "value" : 24,
        "unit" : "month",
        "system" : "http://unitsofmeasure.org",
        "code" : "mo"
      },
      "specialPrecautionsForStorage" : [{
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-special-precautions-for-storage",
          "code" : "756005041000006",
          "display" : "at room temperature (15 - 25°C)"
        }]
      }]
    },
    {
      "specialPrecautionsForStorage" : [{
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-special-precautions-for-storage",
          "code" : "756005041000004",
          "display" : "protect from light"
        }]
      }]
    },
    {
      "specialPrecautionsForStorage" : [{
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-special-precautions-for-storage",
          "code" : "756005041000011",
          "display" : "Store in the original container"
        }]
      }]
    },
    {
      "type" : {
        "coding" : [{
          "system" : "http://spor.ema.europa.eu/v1/lists/100000073343",
          "code" : "100000073404",
          "display" : "Shelf life after first opening the immediate packaging"
        }]
      },
      "periodDuration" : {
        "value" : 6,
        "unit" : "month",
        "system" : "http://unitsofmeasure.org",
        "code" : "mo"
      }
    }],
    "packaging" : [{
      "type" : {
        "coding" : [{
          "system" : "http://standardterms.edqm.eu",
          "code" : "15007000",
          "display" : "Blister"
        }]
      },
      "quantity" : 3,
      "containedItem" : [{
        "item" : {
          "reference" : {
            "reference" : "ManufacturedItemDefinition/MI-Comprehensive-Sample-VaginalPessary"
          }
        },
        "amount" : {
          "value" : 2,
          "unit" : "countable unit(s)",
          "system" : "http://unitsofmeasure.org",
          "code" : "1"
        }
      }],
      "packaging" : [{
        "type" : {
          "coding" : [{
            "system" : "http://standardterms.edqm.eu",
            "code" : "15058000",
            "display" : "Tube"
          }]
        },
        "quantity" : 1,
        "containedItem" : [{
          "item" : {
            "reference" : {
              "reference" : "ManufacturedItemDefinition/MI-Comprehensive-Sample-VaginalCream"
            }
          },
          "amount" : {
            "value" : 10,
            "unit" : "mg",
            "system" : "http://unitsofmeasure.org",
            "code" : "mg"
          }
        }]
      }]
    },
    {
      "type" : {
        "coding" : [{
          "system" : "http://standardterms.edqm.eu",
          "code" : "30054000",
          "display" : "Sachet"
        }]
      },
      "quantity" : 1
    }]
  }
}

```
