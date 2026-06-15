# IVR Codes - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Codes**

## CodeSystem: IVR Codes 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/CodeSystem/IVR | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRCodeSystem |
| **Copyright/Legal**: CC0-1.0 | |

 
Code system containing concepts defined by IVR. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Ech0207InfectPersPrecaution](ValueSet-IVR-VS-InfectPersPrecaution.md)
* [NACA](ValueSet-IVR-VS-NACA.md)
* [ActRecovAid](ValueSet-IVR-VS-actRecovAid.md)
* [ActRespiOwner](ValueSet-IVR-VS-actRespiOwner.md)
* [ECH0207bedding](ValueSet-IVR-VS-bedding.md)
* [IVRVScoldExposure](ValueSet-IVR-VS-coldExposure.md)
* [EmergDoctSystem](ValueSet-IVR-VS-emergDoctSystem.md)
* [IVRVSevent](ValueSet-IVR-VS-event.md)
* [IVRVSformation](ValueSet-IVR-VS-formation.md)
* [GcsAugenoeffnung](ValueSet-IVR-VS-gcs-augenoeffnung.md)
* [GcsMotoric](ValueSet-IVR-VS-gcsMotoric.md)
* [GcsVerbal](ValueSet-IVR-VS-gcsVerbal.md)
* [IVRVSheatExposure](ValueSet-IVR-VS-heatExposure.md)
* [IVRVSidMedium](ValueSet-IVR-VS-idMedium.md)
* [IVRVSidSource](ValueSet-IVR-VS-idSource.md)
* [IVRVSintensity](ValueSet-IVR-VS-intensity.md)
* [IVRVSlocationType](ValueSet-IVR-VS-locationType.md)
* [IVRVSmissionTimeRole](ValueSet-IVR-VS-missionTimeRole.md)
* [MissionType](ValueSet-IVR-VS-missionType.md)
* [IVRVSoffender](ValueSet-IVR-VS-offender.md)
* [Ech0207personRole](ValueSet-IVR-VS-personRole.md)
* [PreTreatmen](ValueSet-IVR-VS-preTreatment.md)
* [IVRVSPulseMethod](ValueSet-IVR-VS-pulseMethod.md)
* [IVRVSrespirationObservation](ValueSet-IVR-VS-respirationObservation.md)
* [IVRVSsymptom](ValueSet-IVR-VS-symptom.md)
* [IVRVSteamRole](ValueSet-IVR-VS-teamRole.md)
* [Ech0207transDisinfection](ValueSet-IVR-VS-transDisinfection.md)
* [IVRVStransReason](ValueSet-IVR-VS-transReason.md)
* [Urgency](ValueSet-IVR-VS-urgency.md)
* [IVRVSurg_adequate](ValueSet-IVR-VS-urgency-adequate.md)
* [IVRVSvalTxpe](ValueSet-IVR-VS-valType.md)
* [Vigilanzavpu](ValueSet-IVR-VS-vigilanzAvpu.md)
* [IVRVSviolenceForm](ValueSet-IVR-VS-violenceForm.md)
* [IVRVSviolenceResult](ValueSet-IVR-VS-violenceResult.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "IVR",
  "url" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
  "version" : "2.0.0-ballot",
  "name" : "IVRCodeSystem",
  "title" : "IVR Codes",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-15T08:00:21+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "Code system containing concepts defined by IVR.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "caseSensitive" : true,
  "content" : "complete",
  "count" : 162,
  "concept" : [{
    "code" : "0",
    "display" : "keine Verletzung oder Erkrankung",
    "designation" : [{
      "language" : "de-CH",
      "value" : "keine Verletzung oder Erkrankung"
    },
    {
      "language" : "fr-CH",
      "value" : "aucune blessure ou maladie"
    },
    {
      "language" : "it-CH",
      "value" : "nessuna lesione o malattia"
    }]
  },
  {
    "code" : "1000001",
    "display" : "primary mission",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Primäreinsatz"
    },
    {
      "language" : "fr-CH",
      "value" : "Mission primaire"
    },
    {
      "language" : "it-CH",
      "value" : "Intervento primario"
    }]
  },
  {
    "code" : "1000002",
    "display" : "secondary mission",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Sekundäreinsatz"
    },
    {
      "language" : "fr-CH",
      "value" : "Mission secondaire"
    },
    {
      "language" : "it-CH",
      "value" : "Intervento secondario"
    }]
  },
  {
    "code" : "1000003",
    "display" : "stand-by mission",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Bereitschaftsdienst"
    },
    {
      "language" : "fr-CH",
      "value" : "Service de garde"
    },
    {
      "language" : "it-CH",
      "value" : "Guardia medica"
    }]
  },
  {
    "code" : "1000004",
    "display" : "residential EMS",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Stationär Rettungsdienst"
    },
    {
      "language" : "fr-CH",
      "value" : "Service de sauvetage fixe"
    },
    {
      "language" : "it-CH",
      "value" : "Servizio di salvataggio ospedaliero"
    }]
  },
  {
    "code" : "1000005",
    "display" : "pickup by EMS",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Abholung durch Rettungsdienst"
    },
    {
      "language" : "fr-CH",
      "value" : "Prise en charge par le service de sauvetage"
    },
    {
      "language" : "it-CH",
      "value" : "Trasporto con servizio di salvataggio"
    }]
  },
  {
    "code" : "1000006",
    "display" : "rendezvous",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Rendezvous"
    },
    {
      "language" : "fr-CH",
      "value" : "Rendez-vous"
    },
    {
      "language" : "it-CH",
      "value" : "Rendez-vous"
    }]
  },
  {
    "code" : "1000007",
    "display" : "with siren",
    "designation" : [{
      "language" : "de-CH",
      "value" : "mit Sondersignal"
    },
    {
      "language" : "fr-CH",
      "value" : "Avec sirène"
    },
    {
      "language" : "it-CH",
      "value" : "Con segnali prioritari"
    }]
  },
  {
    "code" : "1000008",
    "display" : "without siren",
    "designation" : [{
      "language" : "de-CH",
      "value" : "ohne Sondersignal"
    },
    {
      "language" : "fr-CH",
      "value" : "Sans sirène"
    },
    {
      "language" : "it-CH",
      "value" : "Senza segnali prioritari"
    }]
  },
  {
    "code" : "1000010",
    "display" : "paramedic-on-training",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Rettungssanitäter/in in Ausbildung"
    },
    {
      "language" : "fr-CH",
      "value" : "Etudiant/e Ambulanier/ère"
    },
    {
      "language" : "it-CH",
      "value" : "Soccorritore in formazione"
    }]
  },
  {
    "code" : "1000011",
    "display" : "Ambulanceman-on-training",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Transportsanitäter/in in Ausbildung"
    },
    {
      "language" : "fr-CH",
      "value" : "Technicien ambulancier en formation"
    },
    {
      "language" : "it-CH",
      "value" : "Soccorritore ausiliario d'ambulanza in formazione"
    }]
  },
  {
    "code" : "1000013",
    "display" : "driver",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Fahrer"
    },
    {
      "language" : "fr-CH",
      "value" : "Chauffeur"
    },
    {
      "language" : "it-CH",
      "value" : "Autista"
    }]
  },
  {
    "code" : "1000014",
    "display" : "trainee",
    "designation" : [{
      "language" : "de-CH",
      "value" : "in Ausbildung"
    },
    {
      "language" : "fr-CH",
      "value" : "en formation"
    },
    {
      "language" : "it-CH",
      "value" : "In formazione"
    }]
  },
  {
    "code" : "1000016",
    "display" : "attending doctor",
    "designation" : [{
      "language" : "de-CH",
      "value" : "betreuender Arzt"
    },
    {
      "language" : "fr-CH",
      "value" : "Médecin responsable"
    },
    {
      "language" : "it-CH",
      "value" : "Medico responsabile"
    }]
  },
  {
    "code" : "1000020",
    "display" : "apprentice",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Praktikant"
    },
    {
      "language" : "fr-CH",
      "value" : "Stagiaire"
    },
    {
      "language" : "it-CH",
      "value" : "Stagista"
    }]
  },
  {
    "code" : "1000021",
    "display" : "security force",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Sicherheitsbegleitung"
    },
    {
      "language" : "fr-CH",
      "value" : "Service sécurité"
    },
    {
      "language" : "it-CH",
      "value" : "Accompagnamento protettivo"
    }]
  },
  {
    "code" : "1000022",
    "display" : "witness",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Zeuge / Zeugin"
    },
    {
      "language" : "fr-CH",
      "value" : "Témoin"
    },
    {
      "language" : "it-CH",
      "value" : "Testimone"
    }]
  },
  {
    "code" : "1000033",
    "display" : "alarm",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Alarmierungszeit"
    },
    {
      "language" : "fr-CH",
      "value" : "Heure d'alarme"
    },
    {
      "language" : "it-CH",
      "value" : "Orario dell'allarme"
    }]
  },
  {
    "code" : "1000034",
    "display" : "disposition",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Dispositionszeit"
    },
    {
      "language" : "fr-CH",
      "value" : "traitement de la centrale d’appels"
    },
    {
      "language" : "it-CH",
      "value" : "Tempo di elaborazione telefonata 144"
    }]
  },
  {
    "code" : "1000035",
    "display" : "rollout",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Ausrückzeit"
    },
    {
      "language" : "fr-CH",
      "value" : "Parti"
    },
    {
      "language" : "it-CH",
      "value" : "Partenza per il luogo"
    }]
  },
  {
    "code" : "1000036",
    "display" : "arrival on scene",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Ankunftszeit am Einsatzort"
    },
    {
      "language" : "fr-CH",
      "value" : "Arrivée sur le site"
    },
    {
      "language" : "it-CH",
      "value" : "Arrivo sul luogo"
    }]
  },
  {
    "code" : "1000037",
    "display" : "arrival patient",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Ankunftszeit beim Patienten"
    },
    {
      "language" : "fr-CH",
      "value" : "Arrivée auprès du patient"
    },
    {
      "language" : "it-CH",
      "value" : "Accesso al paziente"
    }]
  },
  {
    "code" : "1000038",
    "display" : "departure from scene",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Abfahrtszeit vom Einsatzort"
    },
    {
      "language" : "fr-CH",
      "value" : "Départ du site"
    },
    {
      "language" : "it-CH",
      "value" : "Partenza dal luogo"
    }]
  },
  {
    "code" : "1000039",
    "display" : "arrival at target",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Ankunftszeit am Zielort"
    },
    {
      "language" : "fr-CH",
      "value" : "Arrivée à destination"
    },
    {
      "language" : "it-CH",
      "value" : "Arrivo a destinazione"
    }]
  },
  {
    "code" : "1000040",
    "display" : "handover patient",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Übergabezeit"
    },
    {
      "language" : "fr-CH",
      "value" : "Remise du patient"
    },
    {
      "language" : "it-CH",
      "value" : "Consegna del paziente"
    }]
  },
  {
    "code" : "1000041",
    "display" : "departure from target",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Abfahrtszeit vom Zielort"
    },
    {
      "language" : "fr-CH",
      "value" : "Départ du lieu de destination"
    },
    {
      "language" : "it-CH",
      "value" : "Partenza dal luogo di destinazione"
    }]
  },
  {
    "code" : "1000042",
    "display" : "operational readiness",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Zeit Einsatzbereit"
    },
    {
      "language" : "fr-CH",
      "value" : "Opérationnel"
    },
    {
      "language" : "it-CH",
      "value" : "Prontezza"
    }]
  },
  {
    "code" : "1000043",
    "display" : "contumeliousness",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Beschimpfung"
    },
    {
      "language" : "fr-CH",
      "value" : "Insulte"
    },
    {
      "language" : "it-CH",
      "value" : "Insulto"
    }]
  },
  {
    "code" : "1000044",
    "display" : "pelting with items",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Bewerfen mit Gegenständen"
    },
    {
      "language" : "fr-CH",
      "value" : "Lancer des objets"
    },
    {
      "language" : "it-CH",
      "value" : "Lancio di oggetti"
    }]
  },
  {
    "code" : "1000045",
    "display" : "unwanted touching",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Unerwünschte Berührung"
    },
    {
      "language" : "fr-CH",
      "value" : "Contact physique indésirable"
    },
    {
      "language" : "it-CH",
      "value" : "Contatto fisico indesiderato"
    }]
  },
  {
    "code" : "1000046",
    "display" : "hustling",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Stossen / Anrempeln"
    },
    {
      "language" : "fr-CH",
      "value" : "Bousculades"
    },
    {
      "language" : "it-CH",
      "value" : "Spintoni"
    }]
  },
  {
    "code" : "1000049",
    "display" : "slight corporal attack",
    "designation" : [{
      "language" : "de-CH",
      "value" : "leichter körperlicher Angriff"
    },
    {
      "language" : "fr-CH",
      "value" : "Agression physique légère"
    },
    {
      "language" : "it-CH",
      "value" : "Leggera aggressione fisica"
    }]
  },
  {
    "code" : "100005",
    "display" : "no information",
    "designation" : [{
      "language" : "de-CH",
      "value" : "keine Angaben"
    },
    {
      "language" : "fr-CH",
      "value" : "Pas d'informations"
    },
    {
      "language" : "it-CH",
      "value" : "Nessuna informazione"
    }]
  },
  {
    "code" : "1000050",
    "display" : "schwerer körperlicher Angriff",
    "designation" : [{
      "language" : "de-CH",
      "value" : "schwerer körperlicher Angriff"
    },
    {
      "language" : "fr-CH",
      "value" : "Agression physique grave"
    },
    {
      "language" : "it-CH",
      "value" : "Severa aggressione fisica"
    }]
  },
  {
    "code" : "1000053",
    "display" : "Identity card",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Identitätskarte"
    },
    {
      "language" : "fr-CH",
      "value" : "Carte d'identité"
    },
    {
      "language" : "it-CH",
      "value" : "Carta d'identità"
    }]
  },
  {
    "code" : "1000054",
    "display" : "unknown",
    "designation" : [{
      "language" : "de-CH",
      "value" : "unbekannt"
    },
    {
      "language" : "fr-CH",
      "value" : "inconnu"
    },
    {
      "language" : "it-CH",
      "value" : "sconosciuto"
    }]
  },
  {
    "code" : "1000055",
    "display" : "not asked",
    "designation" : [{
      "language" : "de-CH",
      "value" : "nicht erfragt"
    },
    {
      "language" : "fr-CH",
      "value" : "Pas demandé"
    },
    {
      "language" : "it-CH",
      "value" : "Non indagato"
    }]
  },
  {
    "code" : "1000057",
    "display" : "see attachment",
    "designation" : [{
      "language" : "de-CH",
      "value" : "siehe Beilage"
    },
    {
      "language" : "fr-CH",
      "value" : "Voir pièce jointe"
    },
    {
      "language" : "it-CH",
      "value" : "Vedi allegato"
    }]
  },
  {
    "code" : "1000058",
    "display" : "no information",
    "designation" : [{
      "language" : "de-CH",
      "value" : "keine Angaben"
    },
    {
      "language" : "fr-CH",
      "value" : "Aucune information"
    },
    {
      "language" : "it-CH",
      "value" : "Nessuna informazione"
    }]
  },
  {
    "code" : "1000059",
    "display" : "threat with weapon",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Bedrohung mit Waffe"
    },
    {
      "language" : "fr-CH",
      "value" : "Menace avec arme"
    },
    {
      "language" : "it-CH",
      "value" : "Minaccia con arma"
    }]
  },
  {
    "code" : "1000060",
    "display" : "violation by weapon",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Verletzung mit Waffe"
    },
    {
      "language" : "fr-CH",
      "value" : "Blessure par arme"
    },
    {
      "language" : "it-CH",
      "value" : "Ferita con arma"
    }]
  },
  {
    "code" : "1000061",
    "display" : "passport",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Pass"
    },
    {
      "language" : "fr-CH",
      "value" : "Passeport"
    },
    {
      "language" : "it-CH",
      "value" : "Passaporto"
    }]
  },
  {
    "code" : "1000062",
    "display" : "Health insurance card",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Krankenkassenkarte"
    },
    {
      "language" : "fr-CH",
      "value" : "Carte d'assurance maladie"
    },
    {
      "language" : "it-CH",
      "value" : "Tessera di assicurazione sanitaria"
    }]
  },
  {
    "code" : "1000063",
    "display" : "Driver license",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Fahrausweis"
    },
    {
      "language" : "fr-CH",
      "value" : "Permis de conduire"
    },
    {
      "language" : "it-CH",
      "value" : "Patente di guida"
    }]
  },
  {
    "code" : "1000064",
    "display" : "personal statement",
    "designation" : [{
      "language" : "de-CH",
      "value" : "persönliche Aussage"
    },
    {
      "language" : "fr-CH",
      "value" : "Déclaration personnelle"
    },
    {
      "language" : "it-CH",
      "value" : "Dichiarazione personale"
    }]
  },
  {
    "code" : "1000065",
    "display" : "Credit card",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Kreditkarte"
    },
    {
      "language" : "fr-CH",
      "value" : "Carte de crédit"
    },
    {
      "language" : "it-CH",
      "value" : "Carta di credito"
    }]
  },
  {
    "code" : "1000066",
    "display" : "other identification piece",
    "designation" : [{
      "language" : "de-CH",
      "value" : "anderes Identifikationsmittel"
    },
    {
      "language" : "fr-CH",
      "value" : "Autre pièce d'identification"
    },
    {
      "language" : "it-CH",
      "value" : "Altro dispositivo di identificazione"
    }]
  },
  {
    "code" : "1000067",
    "display" : "identification impossible",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Identifikation nicht möglich"
    },
    {
      "language" : "fr-CH",
      "value" : "Identification impossible"
    },
    {
      "language" : "it-CH",
      "value" : "Identificazione impossibile"
    }]
  },
  {
    "code" : "1000068",
    "display" : "disinfection of hands by Virugard",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Händedesinfektion mit Virugard"
    },
    {
      "language" : "fr-CH",
      "value" : "Désinfection des mains avec Virugard"
    },
    {
      "language" : "it-CH",
      "value" : "Disinfezione delle mani con Virugard"
    }]
  },
  {
    "code" : "1000069",
    "display" : "disinfection of hands by Sterilium",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Händedesinfektion mit Sterilium"
    },
    {
      "language" : "fr-CH",
      "value" : "Désinfection des mains avec Sterilium"
    },
    {
      "language" : "it-CH",
      "value" : "Disinfezione delle mani con Sterilium"
    }]
  },
  {
    "code" : "1000070",
    "display" : "operation clothes",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Operationsmantel"
    },
    {
      "language" : "fr-CH",
      "value" : "Vêtements chirurgicaux"
    },
    {
      "language" : "it-CH",
      "value" : "Abiti chirurgici"
    }]
  },
  {
    "code" : "1000071",
    "display" : "cloth change after mission",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Dienstkleiderwechsel nach Einsatzende"
    },
    {
      "language" : "fr-CH",
      "value" : "Changement de vêtements après la fin de la mission"
    },
    {
      "language" : "it-CH",
      "value" : "Cambio di vestiti dopo la fine della missione"
    }]
  },
  {
    "code" : "1000072",
    "display" : "hazmat suit, ventilated",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Vollschutzabzug, belüftet"
    },
    {
      "language" : "fr-CH",
      "value" : "Combinaison de protection totale, ventilé"
    },
    {
      "language" : "it-CH",
      "value" : "Tutta di protezione completo, ventilato"
    }]
  },
  {
    "code" : "1000073",
    "display" : "other protective action",
    "designation" : [{
      "language" : "de-CH",
      "value" : "andere Schutzmassnahme"
    },
    {
      "language" : "fr-CH",
      "value" : "Autres mesures de protection"
    },
    {
      "language" : "it-CH",
      "value" : "Altre misure di sicurezza"
    }]
  },
  {
    "code" : "1000074",
    "display" : "not tangible",
    "designation" : [{
      "language" : "de-CH",
      "value" : "nicht fühlbar"
    },
    {
      "language" : "fr-CH",
      "value" : "Non perceptible"
    },
    {
      "language" : "it-CH",
      "value" : "Non percettibile"
    }]
  },
  {
    "code" : "1000075",
    "display" : "Stridor links",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Stridor links"
    },
    {
      "language" : "fr-CH",
      "value" : "Stridor à gauche"
    },
    {
      "language" : "it-CH",
      "value" : "Stridore a sinistra"
    }]
  },
  {
    "code" : "1000077",
    "display" : "Respiratory crackles left",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Rasselgeräusche links"
    },
    {
      "language" : "fr-CH",
      "value" : "Râles à gauche"
    },
    {
      "language" : "it-CH",
      "value" : "Crepitii a sinistra"
    }]
  },
  {
    "code" : "1000078",
    "display" : "Respiratory crackles right",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Rasselgeräusche rechts"
    },
    {
      "language" : "fr-CH",
      "value" : "Râles à droite"
    },
    {
      "language" : "it-CH",
      "value" : "Crepitii a destra"
    }]
  },
  {
    "code" : "1000079",
    "display" : "crowd",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Personenansammlung"
    },
    {
      "language" : "fr-CH",
      "value" : "Foule"
    },
    {
      "language" : "it-CH",
      "value" : "Folla"
    }]
  },
  {
    "code" : "1000080",
    "display" : "person, unknown",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Drittperson unbekannt"
    },
    {
      "language" : "fr-CH",
      "value" : "Tierce personne inconnue"
    },
    {
      "language" : "it-CH",
      "value" : "Terza persona sconosciuta"
    }]
  },
  {
    "code" : "1000081",
    "display" : "person, known",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Drittperson bekannt"
    },
    {
      "language" : "fr-CH",
      "value" : "Tierce personne connue"
    },
    {
      "language" : "it-CH",
      "value" : "Terza persona conosciuta"
    }]
  },
  {
    "code" : "1000082",
    "display" : "organisation point of departure",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Organisation des Abfahrtsortes"
    },
    {
      "language" : "fr-CH",
      "value" : "Organisation du lieu de départ"
    },
    {
      "language" : "it-CH",
      "value" : "Organizzazione del luogo di partenza"
    }]
  },
  {
    "code" : "1000083",
    "display" : "organisation point of arrival",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Organisation Zielort"
    },
    {
      "language" : "fr-CH",
      "value" : "Organisation du lieu d'arrivée"
    },
    {
      "language" : "it-CH",
      "value" : "Organizzazione del luogo di arrivo"
    }]
  },
  {
    "code" : "1000084",
    "display" : "non-professional",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Laie"
    },
    {
      "language" : "fr-CH",
      "value" : "Laïque"
    },
    {
      "language" : "it-CH",
      "value" : "Laico"
    }]
  },
  {
    "code" : "1000085",
    "display" : "vacuum pillow",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Vakuumkissen"
    },
    {
      "language" : "fr-CH",
      "value" : "Attelle à dépression"
    },
    {
      "language" : "it-CH",
      "value" : "Stecca a depressione"
    }]
  },
  {
    "code" : "1000086",
    "display" : "vacuum mattress",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Vakuummatraze"
    },
    {
      "language" : "fr-CH",
      "value" : "Matelas coquille"
    },
    {
      "language" : "it-CH",
      "value" : "Materasso a depressione"
    }]
  },
  {
    "code" : "1000087",
    "display" : "carrying chair",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Tragestuhl"
    },
    {
      "language" : "fr-CH",
      "value" : "Chaise de transport"
    },
    {
      "language" : "it-CH",
      "value" : "Sedia di trasporto"
    }]
  },
  {
    "code" : "1000088",
    "display" : "KED system",
    "designation" : [{
      "language" : "de-CH",
      "value" : "KED System"
    },
    {
      "language" : "fr-CH",
      "value" : "KED"
    },
    {
      "language" : "it-CH",
      "value" : "KED"
    }]
  },
  {
    "code" : "1000089",
    "display" : "Sam Splint",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Sam Splint"
    },
    {
      "language" : "fr-CH",
      "value" : "Attelle"
    },
    {
      "language" : "it-CH",
      "value" : "Stecca"
    }]
  },
  {
    "code" : "1000090",
    "display" : "Sam Sling",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Sam Sling"
    },
    {
      "language" : "fr-CH",
      "value" : "Ceinture pelvienne"
    },
    {
      "language" : "it-CH",
      "value" : "Cintura pelvica"
    }]
  },
  {
    "code" : "1000091",
    "display" : "Maxi Cosi",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Maxi Cosi"
    },
    {
      "language" : "fr-CH",
      "value" : "Siège pour enfant"
    },
    {
      "language" : "it-CH",
      "value" : "Seggiolino per bambini"
    }]
  },
  {
    "code" : "1000092",
    "display" : "property damage",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Sachschaden"
    },
    {
      "language" : "fr-CH",
      "value" : "Dommages à la propriété"
    },
    {
      "language" : "it-CH",
      "value" : "Danni alla proprietà"
    }]
  },
  {
    "code" : "1000093",
    "display" : "violation of personal integrity",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Verletzung der persönlichen Integrität"
    },
    {
      "language" : "fr-CH",
      "value" : "Atteinte à l'intégrité de la personne"
    },
    {
      "language" : "it-CH",
      "value" : "Violazione dell'integrità personale"
    }]
  },
  {
    "code" : "1000094",
    "display" : "obstruction of mission",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Behinderung des Einsatzes"
    },
    {
      "language" : "fr-CH",
      "value" : "Obstacle au bon déroulement de la mission"
    },
    {
      "language" : "it-CH",
      "value" : "Ostacolo al buon svolgimento della missione"
    }]
  },
  {
    "code" : "1000095",
    "display" : "escort",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Begleitperson"
    },
    {
      "language" : "fr-CH",
      "value" : "Accompagnateur"
    },
    {
      "language" : "it-CH",
      "value" : "Accompagnatore"
    }]
  },
  {
    "code" : "1000096",
    "display" : "inheritor",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Erben"
    },
    {
      "language" : "fr-CH",
      "value" : "Héritiers"
    },
    {
      "language" : "it-CH",
      "value" : "Eredi"
    }]
  },
  {
    "code" : "1000097",
    "display" : "principal",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Auftraggeber"
    },
    {
      "language" : "fr-CH",
      "value" : "Mandataire"
    },
    {
      "language" : "it-CH",
      "value" : "Mandatario"
    }]
  },
  {
    "code" : "1000098",
    "display" : "legal representative",
    "designation" : [{
      "language" : "de-CH",
      "value" : "gesetzlicher Vertreter"
    },
    {
      "language" : "fr-CH",
      "value" : "Représentant légal"
    },
    {
      "language" : "it-CH",
      "value" : "Rappresentante legale"
    }]
  },
  {
    "code" : "1000099",
    "display" : "parents",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Eltern"
    },
    {
      "language" : "fr-CH",
      "value" : "Parents"
    },
    {
      "language" : "it-CH",
      "value" : "Genitori"
    }]
  },
  {
    "code" : "1000101",
    "display" : "seated",
    "designation" : [{
      "language" : "de-CH",
      "value" : "sitzend"
    },
    {
      "language" : "fr-CH",
      "value" : "assis"
    },
    {
      "language" : "it-CH",
      "value" : "seduto"
    }]
  },
  {
    "code" : "1000102",
    "display" : "partly lying",
    "designation" : [{
      "language" : "de-CH",
      "value" : "halb liegend"
    },
    {
      "language" : "fr-CH",
      "value" : "semi-assis"
    },
    {
      "language" : "it-CH",
      "value" : "Semiseduto"
    }]
  },
  {
    "code" : "1000103",
    "display" : "laying",
    "designation" : [{
      "language" : "de-CH",
      "value" : "liegend"
    },
    {
      "language" : "fr-CH",
      "value" : "couché"
    },
    {
      "language" : "it-CH",
      "value" : "sdraiato"
    }]
  },
  {
    "code" : "1000104",
    "display" : "legs up",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Beine hoch"
    },
    {
      "language" : "fr-CH",
      "value" : "Jambes surélevées"
    },
    {
      "language" : "it-CH",
      "value" : "Gambe rialzate"
    }]
  },
  {
    "code" : "1000105",
    "display" : "legs down",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Beine tief"
    },
    {
      "language" : "fr-CH",
      "value" : "Jambes en bas"
    },
    {
      "language" : "it-CH",
      "value" : "Gambe in giù"
    }]
  },
  {
    "code" : "1000106",
    "display" : "knee kick",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Kniekick"
    },
    {
      "language" : "fr-CH",
      "value" : "Coup de genou"
    },
    {
      "language" : "it-CH",
      "value" : "Ginocchia piegate"
    }]
  },
  {
    "code" : "1000107",
    "display" : "abdominal position",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Bauchlage"
    },
    {
      "language" : "fr-CH",
      "value" : "Décubitus ventral"
    },
    {
      "language" : "it-CH",
      "value" : "Decubito Prono"
    }]
  },
  {
    "code" : "1000108",
    "display" : "side position left",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Seitenlage links"
    },
    {
      "language" : "fr-CH",
      "value" : "Décubitus latéral gauche"
    },
    {
      "language" : "it-CH",
      "value" : "Decubito laterale sinistro"
    }]
  },
  {
    "code" : "1000109",
    "display" : "side position right",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Seitenlage rechts"
    },
    {
      "language" : "fr-CH",
      "value" : "Décubitus latéral droite"
    },
    {
      "language" : "it-CH",
      "value" : "Decubito laterale destro"
    }]
  },
  {
    "code" : "1000110",
    "display" : "emergency mission",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Notfall-Einsatz"
    },
    {
      "language" : "fr-CH",
      "value" : "Mission d'urgence"
    },
    {
      "language" : "it-CH",
      "value" : "Missione di emergenza"
    }]
  },
  {
    "code" : "1000111",
    "display" : "relocation",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Verlegung zwischen Institutionen"
    },
    {
      "language" : "fr-CH",
      "value" : "Transferts entre institutions"
    },
    {
      "language" : "it-CH",
      "value" : "Trasferimenti tra istituzioni"
    }]
  },
  {
    "code" : "1000112",
    "display" : "shuttle for emergency doctor",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Notarzt-Zubringer"
    },
    {
      "language" : "fr-CH",
      "value" : "Véhicule SMUR"
    },
    {
      "language" : "it-CH",
      "value" : "Automedica"
    }]
  },
  {
    "code" : "1000113",
    "display" : "incubator transport",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Isolettentransport"
    },
    {
      "language" : "fr-CH",
      "value" : "Transport isolette"
    },
    {
      "language" : "it-CH",
      "value" : "Trasporto con isoletta"
    }]
  },
  {
    "code" : "1000114",
    "display" : "neonatology mission",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Neonatologischer Einsatz"
    },
    {
      "language" : "fr-CH",
      "value" : "Intervention néonatale"
    },
    {
      "language" : "it-CH",
      "value" : "Intervento neonatale"
    }]
  },
  {
    "code" : "1000115",
    "display" : "return transport",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Rücktransport von Untersuchung"
    },
    {
      "language" : "fr-CH",
      "value" : "Transport de retour après examen"
    },
    {
      "language" : "it-CH",
      "value" : "Trasporto di ritorno dopo esame"
    }]
  },
  {
    "code" : "1000116",
    "display" : "intervention mission police",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Interventionseinsatz Polizei"
    },
    {
      "language" : "fr-CH",
      "value" : "Intervention pour la police"
    },
    {
      "language" : "it-CH",
      "value" : "Intervento per il polizia"
    }]
  },
  {
    "code" : "1000117",
    "display" : "self-referral",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Selbsteinweisung / Krankentransport"
    },
    {
      "language" : "fr-CH",
      "value" : "Auto-admission"
    },
    {
      "language" : "it-CH",
      "value" : "Auto-ricovero"
    }]
  },
  {
    "code" : "1000118",
    "display" : "stretcher mission",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Einsatz Stretcher"
    },
    {
      "language" : "fr-CH",
      "value" : "Intervention avec brancard"
    },
    {
      "language" : "it-CH",
      "value" : "Intervento con barella"
    }]
  },
  {
    "code" : "1000119",
    "display" : "mission for partner",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Einsatz für Vertragspartner"
    },
    {
      "language" : "fr-CH",
      "value" : "Intervention pour les partenaires contractuels"
    },
    {
      "language" : "it-CH",
      "value" : "Intervento per i partner contrattuali"
    }]
  },
  {
    "code" : "1000120",
    "display" : "involuntary committment",
    "designation" : [{
      "language" : "de-CH",
      "value" : "fürsorgerische Unterbringung"
    },
    {
      "language" : "fr-CH",
      "value" : "Hospitalisation non consensuelle"
    },
    {
      "language" : "it-CH",
      "value" : "Ricovero non consenzuale"
    }]
  },
  {
    "code" : "1000121",
    "display" : "service on place",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Dienstleistung vor Ort (DVO)"
    },
    {
      "language" : "fr-CH",
      "value" : "Service sur place"
    },
    {
      "language" : "it-CH",
      "value" : "Servizio sul posto"
    }]
  },
  {
    "code" : "1000122",
    "display" : "referral by doctor",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Ärztliche Einweisung"
    },
    {
      "language" : "fr-CH",
      "value" : "Admission médicale"
    },
    {
      "language" : "it-CH",
      "value" : "Ricovero medico"
    }]
  },
  {
    "code" : "1000123",
    "display" : "refuse of transport",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Transportverweigerung"
    },
    {
      "language" : "fr-CH",
      "value" : "Refus de transport"
    },
    {
      "language" : "it-CH",
      "value" : "Rifiuto di trasporto"
    }]
  },
  {
    "code" : "1000124",
    "display" : "nebulize with H2O2",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Vernebelung H2O2"
    },
    {
      "language" : "fr-CH",
      "value" : "Nébulisation avec H2O2"
    },
    {
      "language" : "it-CH",
      "value" : "Nebulizzazione con H2O2"
    }]
  },
  {
    "code" : "1000125",
    "display" : "scrub disinfection  with H2O2",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Scheuer-Wisch-Desinfektion H2O2"
    },
    {
      "language" : "fr-CH",
      "value" : "Désinfection par frottement avec H2O2"
    },
    {
      "language" : "it-CH",
      "value" : "Disinfezione con strofinamento con H2O2"
    }]
  },
  {
    "code" : "1000126",
    "display" : "wedding ring",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Ehering"
    },
    {
      "language" : "fr-CH",
      "value" : "Alliance"
    },
    {
      "language" : "it-CH",
      "value" : "Fede nuziale"
    }]
  },
  {
    "code" : "1000127",
    "display" : "wallet",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Portemonnaie"
    },
    {
      "language" : "fr-CH",
      "value" : "Porte-monnaie"
    },
    {
      "language" : "it-CH",
      "value" : "Borsellino"
    }]
  },
  {
    "code" : "1000128",
    "display" : "wrist watch",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Armbanduhr"
    },
    {
      "language" : "fr-CH",
      "value" : "Montre-bracelet"
    },
    {
      "language" : "it-CH",
      "value" : "Orologio da polso"
    }]
  },
  {
    "code" : "1000129",
    "display" : "Fingerring",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Fingerring"
    },
    {
      "language" : "fr-CH",
      "value" : "Bague"
    },
    {
      "language" : "it-CH",
      "value" : "Anello"
    }]
  },
  {
    "code" : "1000130",
    "display" : "necklace",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Halskette"
    },
    {
      "language" : "fr-CH",
      "value" : "Collier"
    },
    {
      "language" : "it-CH",
      "value" : "Collana"
    }]
  },
  {
    "code" : "1000131",
    "display" : "billfold",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Brieftasche"
    },
    {
      "language" : "fr-CH",
      "value" : "Portefeuille"
    },
    {
      "language" : "it-CH",
      "value" : "Portafogli"
    }]
  },
  {
    "code" : "1000132",
    "display" : "handbag",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Handtasche"
    },
    {
      "language" : "fr-CH",
      "value" : "Sac à main"
    },
    {
      "language" : "it-CH",
      "value" : "Borsetta"
    }]
  },
  {
    "code" : "1000133",
    "display" : "bag",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Tasche"
    },
    {
      "language" : "fr-CH",
      "value" : "Sac"
    },
    {
      "language" : "it-CH",
      "value" : "Borsa"
    }]
  },
  {
    "code" : "1000134",
    "display" : "no, siren necessary",
    "designation" : [{
      "language" : "de-CH",
      "value" : "nein, Sondersignal notwendig"
    },
    {
      "language" : "fr-CH",
      "value" : "non, sirène nécessaire"
    },
    {
      "language" : "it-CH",
      "value" : "no, segnali prioritari necessari"
    }]
  },
  {
    "code" : "1000135",
    "display" : "no, siren not necessary",
    "designation" : [{
      "language" : "de-CH",
      "value" : "nein, Sondersignal nicht notwendig"
    },
    {
      "language" : "fr-CH",
      "value" : "non, sirène non nécessaire"
    },
    {
      "language" : "it-CH",
      "value" : "no, segnali prioritari non necessari"
    }]
  },
  {
    "code" : "1000138",
    "display" : "flight assistant",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Rettungsspezialist Helikopter"
    },
    {
      "language" : "fr-CH",
      "value" : "Assistant de vol"
    },
    {
      "language" : "it-CH",
      "value" : "Assistente di volo"
    }]
  },
  {
    "code" : "1000139",
    "display" : "3pol EKG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "3pol EKG"
    },
    {
      "language" : "fr-CH",
      "value" : "ECG 3 dérivations"
    },
    {
      "language" : "it-CH",
      "value" : "ECG e derivazioni"
    }]
  },
  {
    "code" : "1000140",
    "display" : "4pol EKG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "4pol EKG"
    },
    {
      "language" : "fr-CH",
      "value" : "ECG 4 dérivations"
    },
    {
      "language" : "it-CH",
      "value" : "ECG 4 derivazioni"
    }]
  },
  {
    "code" : "1000141",
    "display" : "12pol EKG",
    "designation" : [{
      "language" : "de-CH",
      "value" : "12pol EKG"
    },
    {
      "language" : "fr-CH",
      "value" : "ECG 12 dérivations"
    },
    {
      "language" : "it-CH",
      "value" : "ECG 12 derivazioni"
    }]
  },
  {
    "code" : "1000142",
    "display" : "first responder",
    "designation" : [{
      "language" : "de-CH",
      "value" : "First responder"
    },
    {
      "language" : "fr-CH",
      "value" : "First responder"
    },
    {
      "language" : "it-CH",
      "value" : "First responder"
    }]
  },
  {
    "code" : "1000143",
    "display" : "first-degree frostbite",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Erfrierungen 1. Grades"
    },
    {
      "language" : "fr-CH",
      "value" : "Gelures au 1er degré"
    },
    {
      "language" : "it-CH",
      "value" : "Ipotermia di 1. grado"
    }]
  },
  {
    "code" : "1000144",
    "display" : "second-degree frostbite",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Erfrierungen 2. Grades"
    },
    {
      "language" : "fr-CH",
      "value" : "Gelures au 2ème degré"
    },
    {
      "language" : "it-CH",
      "value" : "Ipotermia di 2. grado"
    }]
  },
  {
    "code" : "1000145",
    "display" : "third-degree frostbite",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Erfrierungen 3. Grades"
    },
    {
      "language" : "fr-CH",
      "value" : "Gelures au 3ème degré"
    },
    {
      "language" : "it-CH",
      "value" : "Ipotermia di 3. grado"
    }]
  },
  {
    "code" : "1000146",
    "display" : "fourth-degree frostbite",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Erfrierungen 4. Grades"
    },
    {
      "language" : "fr-CH",
      "value" : "Gelures au 4ème degré"
    },
    {
      "language" : "it-CH",
      "value" : "Ipotermia di 4. grado"
    }]
  },
  {
    "code" : "1000147",
    "display" : "first-degree burn",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Verbrennung 1. Grades"
    },
    {
      "language" : "fr-CH",
      "value" : "Brûlure au 1er degré"
    },
    {
      "language" : "it-CH",
      "value" : "Ustione di 1. grado"
    }]
  },
  {
    "code" : "1000148",
    "display" : "second-degree burn",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Verbrennung 2. Grades"
    },
    {
      "language" : "fr-CH",
      "value" : "Brûlure au 2ème degré"
    },
    {
      "language" : "it-CH",
      "value" : "Ustione di 2. grado"
    }]
  },
  {
    "code" : "1000149",
    "display" : "third-degree burn",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Verbrennung 3. Grades"
    },
    {
      "language" : "fr-CH",
      "value" : "Brûlure au 3ème degré"
    },
    {
      "language" : "it-CH",
      "value" : "Ustione di 3. grado"
    }]
  },
  {
    "code" : "1000150",
    "display" : "on pain stimulus",
    "designation" : [{
      "language" : "de-CH",
      "value" : "auf Schmerzreiz"
    },
    {
      "language" : "fr-CH",
      "value" : "À la douleur"
    },
    {
      "language" : "it-CH",
      "value" : "Allo stimolo doloroso"
    }]
  },
  {
    "code" : "1000151",
    "display" : "on request",
    "designation" : [{
      "language" : "de-CH",
      "value" : "auf Aufforderung"
    },
    {
      "language" : "fr-CH",
      "value" : "À la demande"
    },
    {
      "language" : "it-CH",
      "value" : "Allo stimolo verbale"
    }]
  },
  {
    "code" : "1000152",
    "display" : "spontaneous",
    "designation" : [{
      "language" : "de-CH",
      "value" : "spontan"
    },
    {
      "language" : "fr-CH",
      "value" : "Spontanée"
    },
    {
      "language" : "it-CH",
      "value" : "Spontanea"
    }]
  },
  {
    "code" : "1000153",
    "display" : "stretching",
    "designation" : [{
      "language" : "de-CH",
      "value" : "auf Schmerz Strecksynergismen"
    },
    {
      "language" : "fr-CH",
      "value" : "Extension stéréotypée"
    },
    {
      "language" : "it-CH",
      "value" : "Estensione delle estremità allo stimolo doloroso"
    }]
  },
  {
    "code" : "1000154",
    "display" : "bending",
    "designation" : [{
      "language" : "de-CH",
      "value" : "auf Schmerz Beugesynergismen"
    },
    {
      "language" : "fr-CH",
      "value" : "Flexion stéréotypée"
    },
    {
      "language" : "it-CH",
      "value" : "Anormale flessione allo stimolo doloroso"
    }]
  },
  {
    "code" : "1000155",
    "display" : "undirected defense",
    "designation" : [{
      "language" : "de-CH",
      "value" : "ungezielte Schmerzabwehr"
    },
    {
      "language" : "fr-CH",
      "value" : "Evitement désorientée"
    },
    {
      "language" : "it-CH",
      "value" : "Retrae / Flette ma non localizza il dolore"
    }]
  },
  {
    "code" : "1000156",
    "display" : "directed defense",
    "designation" : [{
      "language" : "de-CH",
      "value" : "gezielte Schmerzabwehr"
    },
    {
      "language" : "fr-CH",
      "value" : "Evitement orientée"
    },
    {
      "language" : "it-CH",
      "value" : "Retrae / Flette localizza il dolore"
    }]
  },
  {
    "code" : "1000157",
    "display" : "take orders",
    "designation" : [{
      "language" : "de-CH",
      "value" : "befolgt Aufforderungen"
    },
    {
      "language" : "fr-CH",
      "value" : "Aux ordres"
    },
    {
      "language" : "it-CH",
      "value" : "Obbedisce ai comandi"
    }]
  },
  {
    "code" : "1000158",
    "display" : "incomprehensible sounds",
    "designation" : [{
      "language" : "de-CH",
      "value" : "unverständliche Laute"
    },
    {
      "language" : "fr-CH",
      "value" : "Sons incompréhensibles"
    },
    {
      "language" : "it-CH",
      "value" : "Suoni incomprensibili"
    }]
  },
  {
    "code" : "1000159",
    "display" : "incoherent words",
    "designation" : [{
      "language" : "de-CH",
      "value" : "unzusammenhängende Worte"
    },
    {
      "language" : "fr-CH",
      "value" : "Inappropriée"
    },
    {
      "language" : "it-CH",
      "value" : "Parla e pronuncia parole, ma incoerenti"
    }]
  },
  {
    "code" : "1000160",
    "display" : "conversational, disoriented",
    "designation" : [{
      "language" : "de-CH",
      "value" : "konversationsfähig, desorientiert"
    },
    {
      "language" : "fr-CH",
      "value" : "Confuse"
    },
    {
      "language" : "it-CH",
      "value" : "Confusione, frasi sconnesse"
    }]
  },
  {
    "code" : "1000161",
    "display" : "conversational, oriented",
    "designation" : [{
      "language" : "de-CH",
      "value" : "konversationsfähig, orientiert"
    },
    {
      "language" : "fr-CH",
      "value" : "Normale"
    },
    {
      "language" : "it-CH",
      "value" : "Paziente orientato, conversazione appropriata"
    }]
  },
  {
    "code" : "1000171",
    "display" : "arrival time emergency doctor",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Ankunftszeit Notarzt/Notärztin"
    },
    {
      "language" : "fr-CH",
      "value" : "Heure d'arrivée médecin d'urgence"
    },
    {
      "language" : "it-CH",
      "value" : "Orario di arrivo medico d'urgenza"
    }]
  },
  {
    "code" : "1000172",
    "display" : "pick-up time emergency doctor",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Abholzeit Notarzt/Notärztin"
    },
    {
      "language" : "fr-CH",
      "value" : "Heure de prise en charge médecin d'urgence"
    },
    {
      "language" : "it-CH",
      "value" : "Orario di prelievo medico d'urgenza"
    }]
  },
  {
    "code" : "100076",
    "display" : "Stridor rechts",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Stridor rechts"
    },
    {
      "language" : "fr-CH",
      "value" : "Stridor à droite"
    },
    {
      "language" : "it-CH",
      "value" : "Stridore a destra"
    }]
  },
  {
    "code" : "1100001",
    "display" : "intervention",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Einsatz"
    },
    {
      "language" : "fr-CH",
      "value" : "Intervention"
    },
    {
      "language" : "it-CH",
      "value" : "Intervento"
    }]
  },
  {
    "code" : "1100003",
    "display" : "administrative",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Administrativ"
    },
    {
      "language" : "fr-CH",
      "value" : "Administratif"
    },
    {
      "language" : "it-CH",
      "value" : "Amministrativo"
    }]
  },
  {
    "code" : "1100004",
    "display" : "pretreatment",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Vorbehandlung"
    },
    {
      "language" : "fr-CH",
      "value" : "Prétraitement"
    },
    {
      "language" : "it-CH",
      "value" : "Pretrattamento"
    }]
  },
  {
    "code" : "1100005",
    "display" : "anamnesis",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Anamnese"
    },
    {
      "language" : "fr-CH",
      "value" : "Anamnèse"
    },
    {
      "language" : "it-CH",
      "value" : "Anamnesi"
    }]
  },
  {
    "code" : "1100006",
    "display" : "findings",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Befund"
    },
    {
      "language" : "fr-CH",
      "value" : "Résultats"
    },
    {
      "language" : "it-CH",
      "value" : "Risultati"
    }]
  },
  {
    "code" : "1100007",
    "display" : "diagnosis",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Diagnosen"
    },
    {
      "language" : "fr-CH",
      "value" : "Diagnostique"
    },
    {
      "language" : "it-CH",
      "value" : "Diagnosi"
    }]
  },
  {
    "code" : "1100008",
    "display" : "measures",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Massnahmen"
    },
    {
      "language" : "fr-CH",
      "value" : "Mesures"
    },
    {
      "language" : "it-CH",
      "value" : "Misure"
    }]
  },
  {
    "code" : "1100009",
    "display" : "death",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Todesfall"
    },
    {
      "language" : "fr-CH",
      "value" : "Décès"
    },
    {
      "language" : "it-CH",
      "value" : "Decesso"
    }]
  },
  {
    "code" : "1100010",
    "display" : "transport",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Transport"
    },
    {
      "language" : "fr-CH",
      "value" : "Transport"
    },
    {
      "language" : "it-CH",
      "value" : "Trasporto"
    }]
  },
  {
    "code" : "1100011",
    "display" : "handover",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Übergabe"
    },
    {
      "language" : "fr-CH",
      "value" : "Remise"
    },
    {
      "language" : "it-CH",
      "value" : "Consegna"
    }]
  },
  {
    "code" : "A",
    "display" : "wach, ansprechbar und orientiert",
    "designation" : [{
      "language" : "de-CH",
      "value" : "wach, ansprechbar und orientiert"
    },
    {
      "language" : "fr-CH",
      "value" : "Alerte, réactif et orienté"
    },
    {
      "language" : "it-CH",
      "value" : "Vigile, reattivo e orientato"
    }]
  },
  {
    "code" : "I",
    "display" : "geringfügige Störung",
    "designation" : [{
      "language" : "de-CH",
      "value" : "geringfügige Störung"
    },
    {
      "language" : "fr-CH",
      "value" : "Perturbation minime"
    },
    {
      "language" : "it-CH",
      "value" : "Disturbo minimo"
    }]
  },
  {
    "code" : "II",
    "display" : "leichte bis mässig schwere Störung",
    "designation" : [{
      "language" : "de-CH",
      "value" : "leichte bis mässig schwere Störung"
    },
    {
      "language" : "fr-CH",
      "value" : "Perturbation mineure à modérément grave"
    },
    {
      "language" : "it-CH",
      "value" : "Disturbo da lieve a moderatamente grave"
    }]
  },
  {
    "code" : "III",
    "display" : "mässige bis schwere Störung",
    "designation" : [{
      "language" : "de-CH",
      "value" : "mässige bis schwere Störung"
    },
    {
      "language" : "fr-CH",
      "value" : "Perturbation modérée à grave"
    },
    {
      "language" : "it-CH",
      "value" : "Disturbo da moderato a grave"
    }]
  },
  {
    "code" : "IV",
    "display" : "schwere Störung, lebensbedrohlich",
    "designation" : [{
      "language" : "de-CH",
      "value" : "schwere Störung, lebensbedrohlich"
    },
    {
      "language" : "fr-CH",
      "value" : "Perturbation grave, mettant la vie en danger"
    },
    {
      "language" : "it-CH",
      "value" : "Grave disturbo, pericolo di morte"
    }]
  },
  {
    "code" : "P",
    "display" : "Reaktion nur auf Schmerzreiz",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Reazione solo allo stimolo del dolore"
    },
    {
      "language" : "fr-CH",
      "value" : "Réaction uniquement au stimulus de la douleur"
    },
    {
      "language" : "it-CH",
      "value" : "Reazione solo allo stimolo del dolore"
    }]
  },
  {
    "code" : "U",
    "display" : "nicht ansprechbar, bewusstlos",
    "designation" : [{
      "language" : "de-CH",
      "value" : "nicht ansprechbar, bewusstlos"
    },
    {
      "language" : "fr-CH",
      "value" : "Inconscient, sans réaction"
    },
    {
      "language" : "it-CH",
      "value" : "Incosciente, senza reazione"
    }]
  },
  {
    "code" : "V",
    "display" : "Reaktion nur bei lauter Ansprache",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Reaktion nur bei lauter Ansprache"
    },
    {
      "language" : "fr-CH",
      "value" : "Réaction uniquement lorsque l'on parle fort"
    },
    {
      "language" : "it-CH",
      "value" : "Reazione solo su stimolo verbale forte"
    }]
  },
  {
    "code" : "VI",
    "display" : "Reanimation",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Reanimation"
    },
    {
      "language" : "fr-CH",
      "value" : "Réanimation"
    },
    {
      "language" : "it-CH",
      "value" : "Rianimazione"
    }]
  },
  {
    "code" : "VII",
    "display" : "Tod",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Tod"
    },
    {
      "language" : "fr-CH",
      "value" : "Mort"
    },
    {
      "language" : "it-CH",
      "value" : "Morte"
    }]
  },
  {
    "code" : "MN",
    "display" : "Mission number",
    "designation" : [{
      "language" : "de-CH",
      "value" : "Einsatznummer"
    },
    {
      "language" : "fr-CH",
      "value" : "Numéro de la mission"
    },
    {
      "language" : "it-CH",
      "value" : "Numero della missione"
    }]
  }]
}

```
