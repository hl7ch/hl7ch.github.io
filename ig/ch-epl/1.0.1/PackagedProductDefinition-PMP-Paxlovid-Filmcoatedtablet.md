# AXLOVID film-coated tablets 4 × 150 mg / 2 × 100 mg - CH EPL (R5) v1.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **AXLOVID film-coated tablets 4 × 150 mg / 2 × 100 mg**

## Example PackagedProductDefinition: AXLOVID film-coated tablets 4 × 150 mg / 2 × 100 mg

Profile: [PackagedProductDefinition](StructureDefinition-ch-idmp-packagedproductdefinition.md)

**identifier**: [Clinical Product Identifier](NamingSystem-PCID.md)/CH-01001107-0687930010000-0001

**packageFor**: [MedicinalProductDefinition: extension = Film-coated tablet; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-01001107-0687930010000; indication = Paxlovid wird angewendet für die Behandlung der Coronavirus-Krankheit 2019 (COVID-19) bei Erwachsenen, die keine Sauerstofftherapie oder Hospitalisierung aufgrund von COVID-19 benötigen und bei denen ein erhöhtes Risiko für einen schweren Verlauf von COVID-19 besteht (siehe «Klinische Wirksamkeit»). Paxlovid ist nicht als Ersatz für eine Impfung gegen COVID-19 vorgesehen. Paxlovid sollte gemäss den offiziellen Empfehlungen und unter Berücksichtigung der lokalen epidemiologischen Daten zu zirkulierenden SARS-CoV-2-Varianten angewendet werden.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription single dispensation (A+); additionalMonitoringIndicator = Black Triangle Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = Protease inhibitors,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product,08. INFEKTIONSKRANKHEITEN,08.03. Mittel gegen Viren](MedicinalProductDefinition-Paxlovid-Filmcoatedtablet.md)

**containedItemQuantity**: 30 Tablet (Details: EDQM - Standard Terms code15054000 = 'Tablet')

**description**: 

PAXLOVID Filmtabl 4x150mg/2x100mg

### LegalStatusOfSupplies

| | |
| :--- | :--- |
| - | **Code** |
| * | Medicinal product subject to medical or veterinary prescription single dispensation (A+) |

> **packaging****identifier**: [Global Trade Item Number](NamingSystem-GTIN.md)/7680687930017**type**: Box**quantity**: 1

### ShelfLifeStorages

| | | |
| :--- | :--- | :--- |
| - | **Type** | **SpecialPrecautionsForStorage** |
| * | Shelf life of the medicinal product as packaged for sale | Do not freeze |




## Resource Content

```json
{
  "resourceType" : "PackagedProductDefinition",
  "id" : "PMP-Paxlovid-Filmcoatedtablet",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-packagedproductdefinition"]
  },
  "identifier" : [{
    "system" : "http://fhir.ch/ig/ch-epl/sid/pcid",
    "value" : "CH-01001107-0687930010000-0001"
  }],
  "packageFor" : [{
    "reference" : "MedicinalProductDefinition/Paxlovid-Filmcoatedtablet"
  }],
  "containedItemQuantity" : [{
    "value" : 30,
    "unit" : "Tablet",
    "system" : "http://standardterms.edqm.eu",
    "code" : "15054000"
  }],
  "description" : "PAXLOVID Filmtabl 4x150mg/2x100mg",
  "legalStatusOfSupply" : [{
    "code" : {
      "coding" : [{
        "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-legal-status-of-supply",
        "code" : "756005022002",
        "display" : "Medicinal product subject to medical or veterinary prescription single dispensation (A+)"
      }]
    }
  }],
  "packaging" : {
    "identifier" : [{
      "system" : "urn:oid:2.51.1.1",
      "value" : "7680687930017"
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
      "specialPrecautionsForStorage" : [{
        "coding" : [{
          "system" : "http://fhir.ch/ig/ch-epl/CodeSystem/ch-SMC-special-precautions-for-storage",
          "code" : "756005042001",
          "display" : "Do not freeze"
        }]
      }]
    }]
  }
}

```
