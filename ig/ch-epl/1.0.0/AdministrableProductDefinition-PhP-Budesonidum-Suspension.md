# PhP Budesonidum-Suspension - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PhP Budesonidum-Suspension**

## Example AdministrableProductDefinition: PhP Budesonidum-Suspension

Profile: [CH IDMP AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md)

**status**: Active

**formOf**: [MedicinalProductDefinition: extension = Tablet and solvent for rectal suspension,Distale Form der Colitis ulcerosa bei ungenügendem Ansprechen auf oder Kontraindikation für Mesalazin.; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7601001346451-5204201; combinedPharmaceuticalDoseForm = Tablet and solvent for rectal suspension; indication = Leichte bis mittelschwere Colitis ulcerosa des Rectums sowie des Colon sigmoideum.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = budesonide,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product,04. GASTROENTEROLOGICA](MedicinalProductDefinition-Entocort-Solvent-and-Tablet.md)

**administrableDoseForm**: Rectal suspension

**unitOfPresentation**: Bottle

### RouteOfAdministrations

| | |
| :--- | :--- |
| - | **Code** |
| * | Rectal use |



## Resource Content

```json
{
  "resourceType" : "AdministrableProductDefinition",
  "id" : "PhP-Budesonidum-Suspension",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-administrableproductdefinition"
    ]
  },
  "status" : "active",
  "formOf" : [
    {
      "reference" : "MedicinalProductDefinition/Entocort-Solvent-and-Tablet"
    }
  ],
  "administrableDoseForm" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "11006000",
        "display" : "Rectal suspension"
      }
    ]
  },
  "unitOfPresentation" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "15009000",
        "display" : "Bottle"
      }
    ]
  },
  "routeOfAdministration" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://standardterms.edqm.eu",
            "code" : "20061000",
            "display" : "Rectal use"
          }
        ]
      }
    }
  ]
}

```
