# PHP Enfortumabum-vedotinum-30-Solution - CH IDMP (R5) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PHP Enfortumabum-vedotinum-30-Solution**

## Example AdministrableProductDefinition: PHP Enfortumabum-vedotinum-30-Solution

Profile: [AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md)

**status**: Active

**formOf**: [MedicinalProductDefinition: extension = Lyophilisate for solution for infusion; identifier = http://fhir.ch/ig/ch-idmp/sid/mpid#Medical Product Identifier#CH-01100869-0682910040000; indication = Padcev ist indiziert zur Behandlung von Erwachsenen mit lokal fortgeschrittenem oder metastasiertem Urothelkarzinom (mUC), die eine platinhaltige Chemotherapie im neoadjuvanten/adjuvanten, lokal fortgeschrittenen oder metastasierten Setting erhalten haben und die während oder nach der Behandlung mit einem Inhibitor des programmierten Zelltodrezeptors-1 (PD-1) oder des programmierten Zelltod-Liganden 1 (PD-L1) einen Progress oder einen Rückfall der Erkrankung erlitten haben.; legalStatusOfSupply = A: Single dispensing requiring a medical or veterinary prescription; additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Not authorised for the treatment in children; classification = gilteritinib,NA KAS art. 12 para. 5 TPLO,Biologics](MedicinalProductDefinition-Padcev-30mg-Powder.md)

**administrableDoseForm**: Solution for Infusion

**unitOfPresentation**: Vial

### RouteOfAdministrations

| | |
| :--- | :--- |
| - | **Code** |
| * | Intravenous use |



## Resource Content

```json
{
  "resourceType" : "AdministrableProductDefinition",
  "id" : "PhP-Enfortumabum-vedotinum-30-Solution",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-idmp/StructureDefinition/ch-idmp-administrableproductdefinition"]
  },
  "status" : "active",
  "formOf" : [{
    "reference" : "MedicinalProductDefinition/Padcev-30mg-Powder"
  }],
  "administrableDoseForm" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "11210000",
      "display" : "Solution for Infusion"
    }]
  },
  "unitOfPresentation" : {
    "coding" : [{
      "system" : "http://standardterms.edqm.eu",
      "code" : "15060000",
      "display" : "Vial"
    }]
  },
  "routeOfAdministration" : [{
    "code" : {
      "coding" : [{
        "system" : "http://standardterms.edqm.eu",
        "code" : "20045000",
        "display" : "Intravenous use"
      }]
    }
  }]
}

```
