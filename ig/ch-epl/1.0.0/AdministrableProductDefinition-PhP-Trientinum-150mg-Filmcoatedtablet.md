# PhP Trientinum-150mg-Tablet - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PhP Trientinum-150mg-Tablet**

## Example AdministrableProductDefinition: PhP Trientinum-150mg-Tablet

Profile: [CH IDMP AdministrableProductDefinition](StructureDefinition-ch-idmp-administrableproductdefinition.md)

**status**: Active

**formOf**: [MedicinalProductDefinition: extension = Film-coated tablet,CUPRIOR wird vergütet zur Behandlung der Kupferspeicherkrankheit (Morbus Wilson) bei Erwachsenen, Jugendlichen und Kindern im Alter von 5 Jahren oder älter, die eine Behandlung mit D-Penicillamin nicht vertragen. Die Behandlung muss von Gastroenterologen oder Hepatologen mit Erfahrung bei der Behandlung von Patienten mit Morbus Wilson initiiert und überwacht werden.; identifier = http://fhir.ch/ig/ch-epl/sid/mpid#Medical Product Identifier#CH-7640109110007-6771901; indication = Cuprior wird angewendet zur Behandlung von Morbus Wilson bei Erwachsenen, Jugendlichen und Kindern im Alter von 5 Jahren oder älter mit Unverträglichkeit gegenüber einer D-Penicillamin-Therapie.; legalStatusOfSupply = Medicinal product subject to medical or veterinary prescription (B); additionalMonitoringIndicator = No Warning; pediatricUseIndicator = Authorised for the treatment in children; classification = gilteritinib,NA KAS art. 12 para. 5 TPLO,Synthetic,Originator product,07. STOFFWECHSEL](MedicinalProductDefinition-Cuprior-150mg-Filmcoatedtablet.md)

**administrableDoseForm**: Film-coated tablet

**unitOfPresentation**: Tablet

### RouteOfAdministrations

| | |
| :--- | :--- |
| - | **Code** |
| * | Oral use |



## Resource Content

```json
{
  "resourceType" : "AdministrableProductDefinition",
  "id" : "PhP-Trientinum-150mg-Filmcoatedtablet",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-epl/StructureDefinition/ch-idmp-administrableproductdefinition"
    ]
  },
  "status" : "active",
  "formOf" : [
    {
      "reference" : "MedicinalProductDefinition/Cuprior-150mg-Filmcoatedtablet"
    }
  ],
  "administrableDoseForm" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "10221000",
        "display" : "Film-coated tablet"
      }
    ]
  },
  "unitOfPresentation" : {
    "coding" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "code" : "15054000",
        "display" : "Tablet"
      }
    ]
  },
  "routeOfAdministration" : [
    {
      "code" : {
        "coding" : [
          {
            "system" : "http://standardterms.edqm.eu",
            "code" : "20053000",
            "display" : "Oral use"
          }
        ]
      }
    }
  ]
}

```
