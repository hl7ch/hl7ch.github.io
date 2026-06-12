# CH-68291001 - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH-68291001**

## Example PackagedProductDefinition: CH-68291001

Profile: [PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md)

**identifier**: [Clinical Product Identifier](NamingSystem-PCID.md)/CH-01100869-0682910030000-0001

**packageFor**: [MedicinalProductDefinition: extension = Lyophilisate for solution for infusion; identifier = http://fhir.ch/ig/ch-idmp/sid/mpid#Medical Product Identifier#CH-01100869-0682910030000; indication = Padcev ist indiziert zur Behandlung von Erwachsenen mit lokal fortgeschrittenem oder metastasiertem Urothelkarzinom (mUC), die eine platinhaltige Chemotherapie im neoadjuvanten/adjuvanten, lokal fortgeschrittenen oder metastasierten Setting erhalten haben und die während oder nach der Behandlung mit einem Inhibitor des programmierten Zelltodrezeptors-1 (PD-1) oder des programmierten Zelltod-Liganden 1 (PD-L1) einen Progress oder einen Rückfall der Erkrankung erlitten haben.; legalStatusOfSupply = A: Single dispensing requiring a medical or veterinary prescription; additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = gilteritinib,NA KAS art. 12 para. 5 TPLO,Biologics](MedicinalProductDefinition-Padcev-20mg-Powder.md)

**containedItemQuantity**: 20 mg (Details: UCUM codemg = 'mg')

**description**: 

Durchstechflasche 1 Stk

### LegalStatusOfSupplies

| | |
| :--- | :--- |
| - | **Code** |
| * | A: Single dispensing requiring a medical or veterinary prescription |

### MarketingStatuses

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Country** | **Status** | **DateRange** |
| * | Switzerland | Marketed | 2011-09-11 --> (ongoing) |

> **packaging****identifier**: [GTIN Global Trade Item Number](http://terminology.hl7.org/7.1.0/NamingSystem-gtin.html)/7680682910021**type**: Box**quantity**: 6

### ShelfLifeStorages

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Type** | **Period[x]** | **SpecialPrecautionsForStorage** |
| * | Shelf life after dilution or reconstitution according to directions | No display for Duration (value: 16; unit: hour; system: http://unitsofmeasure.org; code: h) | Store in the original container |

> **packaging****type**: Vial**quantity**: 1
> **containedItem**

### Items

| | |
| :--- | :--- |
| - | **Reference** |
| * | [ManufacturedItemDefinition: status = active; manufacturedDoseForm = Lyophilisate for solution for infusion; unitOfPresentation = Vial](ManufacturedItemDefinition-MI-Enfortumabum-vedotinum-30-Powder.md) |

**amount**: 20 mg (Details: UCUM codemg = 'mg')




## Resource Content

```json
{
  "resourceType" : "PackagedProductDefinition",
  "id" : "PMP-Enfortumabum-vedotinum-20-Powder",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-packagedproductdefinition"]
  },
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-idmp/sid/pcid",
    "value" : "CH-01100869-0682910030000-0001"
  }],
  "packageFor" : [{
    "reference" : "MedicinalProductDefinition/Padcev-20mg-Powder"
  }],
  "containedItemQuantity" : [{
    "value" : 20,
    "unit" : "mg",
    "system" : "http://unitsofmeasure.org",
    "code" : "mg"
  }],
  "description" : "Durchstechflasche 1 Stk",
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
      "start" : "2011-09-11"
    }
  }],
  "packaging" : {
    "identifier" : [{
      "system" : "https://www.gs1.org/gtin",
      "value" : "7680682910021"
    }],
    "type" : {
      "coding" : [{
        "system" : "http://standardterms.edqm.eu",
        "code" : "30009000",
        "display" : "Box"
      }]
    },
    "quantity" : 6,
    "shelfLifeStorage" : [{
      "type" : {
        "coding" : [{
          "system" : "http://spor.ema.europa.eu/v1/lists/100000073343",
          "code" : "100000073405",
          "display" : "Shelf life after dilution or reconstitution according to directions"
        }]
      },
      "periodDuration" : {
        "value" : 16,
        "unit" : "hour",
        "system" : "http://unitsofmeasure.org",
        "code" : "h"
      },
      "specialPrecautionsForStorage" : [{
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-idmp/CodeSystem/ch-SMC-special-precautions-for-storage",
          "code" : "756005041000011",
          "display" : "Store in the original container"
        }]
      }]
    }],
    "packaging" : [{
      "type" : {
        "coding" : [{
          "system" : "http://standardterms.edqm.eu",
          "code" : "30069000",
          "display" : "Vial"
        }]
      },
      "quantity" : 1,
      "containedItem" : [{
        "item" : {
          "reference" : {
            "reference" : "ManufacturedItemDefinition/MI-Enfortumabum-vedotinum-30-Powder"
          }
        },
        "amount" : {
          "value" : 20,
          "unit" : "mg",
          "system" : "http://unitsofmeasure.org",
          "code" : "mg"
        }
      }]
    }]
  }
}

```
